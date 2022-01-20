<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Advertisement;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use App\Mail\NewAdMail;
use Illuminate\Support\Facades\Mail;
use Image;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('advertisement.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required'
        ]);

        /////   
        $user_check = User::where('email','=', $request->email)->first();
        if(User::where('email', $request->email)->exists()) {
            $user['id'] = $user_check->id;
            $user['email'] = $user_check->email;
            $user['password'] = $user_check->password;
        } else {
            $user = new User();
            $user->name = $request->title;
            $user->password = Hash::make(Str::random(8));
            $user->email = $request->email;
            $user->save();

            $user['id'] = $user->id;
            $user['email'] = $user->email;
            $user['password'] = $user->password;
        }
        /////

        if($request) {
            $request['slug'] = Str::slug($request->title);
            $ad_id = Advertisement::orderByDesc('created_at')->get()->first();
            if($ad_id){
                $ad_id_inc = $ad_id->id + 1;
            } else {
                $ad_id_inc = 1;
            }
            $imgData = [];

            if($request->hasfile('photos_local')) {
                foreach($request->file('photos_local') as $file)
                {
                    $name = time() . '_' . $file->getClientOriginalName();
                    
                    $save_path = public_path().'/uploads/' . $request->slug . '-' . $ad_id_inc . '/';
                    if (!file_exists($save_path)) {
                        mkdir($save_path, 666, true);
                    }

                    $img = Image::make($file->path());
                    $img->resize(800, 600, function ($const) {
                        $const->aspectRatio();
                    })->save($save_path . $name);


                   $file->move($save_path, $name);  
                    $imgData[] = $name;  
                }
            }

            $photo_names = implode("|", $imgData);

            $request['photos'] = $photo_names;
            $request['user_id'] = $user['id'];
            $save_advert = Advertisement::create($request->all());

            $post = \App\Models\Advertisement::where('id',$save_advert->id)->first();
            $post->categories()->attach($request->category);

  
            $details = [
                'user' => $user,
                'advertisement' => $request,
                'public_url' => config('app.url')
            ];

            Mail::to($request->email)->send(new NewAdMail($details));
            //return new NewAdMail;
            if($request->ad_color || $request->ad_up){
                return redirect()->route('pay_ad')->with('success', 'Skelbimas sukurtas sėkmingai')->with('user', $save_advert->id);
            }
            return redirect()->route('homepage')->with('success', 'Skelbimas sukurtas sėkmingai');
        }
    }
    public function pay(Request $request) {
        return $request->session()->get('user');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement, $skelbimo_id, $skelbimo_slug)
    {
        $advertisement = Advertisement::where('id',$skelbimo_id)->first();

        $new_watches = $advertisement->watches + 1;
        Advertisement::where('id',$skelbimo_id)->update(['watches'=> $new_watches]);
        
        $categories = Categories::all();
        return view('advertisement.show',compact('advertisement','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertisement $advertisement, $skelbimo_id, $skelbimo_slug)
    {
        $advertisement = Advertisement::where('id', $skelbimo_id)->first();
        return view('advertisement.edit', compact('advertisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $skelbimo_id, $skelbimo_slug)
    {

        Advertisement::where('id', $skelbimo_id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'location' => $request->location,
            'description' => $request->description,
            'photos' => $request->photos,
            'bussiness_id' => $request->bussiness_id,
            'bussiness_vat' => $request->bussiness_vat,
            'name_surname' => $request->name_surname,
            'phonenumber' => $request->phonenumber,
            'city' => $request->city,
            'address' => $request->address
        ]);

        rename(public_path().'/uploads'.'/'.$skelbimo_slug . '-'. $skelbimo_id,public_path().'/uploads'.'/'. Str::slug($request->title) . '-'. $skelbimo_id);
        return redirect()->route('homepage')->with('success', 'Skelbimas atnaujintas sėkmingai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertisement $advertisement)
    {
        //
    }
}
