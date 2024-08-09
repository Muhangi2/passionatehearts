<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teams;

class Teamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function createteam(){
      return view("team.createteam");
    }

      public function storeteam(Request $request){
    $request->validate([
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:8048',
        'name' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Create a new Team instance
    $team = new teams([
        'name' => $request->get('name'),
        'position' => $request->get('position'),
        'description' => $request->get('description'),
    ]);

    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        list($path, $file_name) = $this->moveFile($photo);
        $team->photo = $path;
    }

    $team->save();
    return redirect()->route('team')->with('success', 'Team member created successfully!');
      }

    public function team()
    {
        $teams = teams::paginate(4);
        return view('team.team',compact('teams'));
    }
    

    public function singleteam($teammemberid)
{
    $team = teams::findOrFail($teammemberid);
    $otherTeams = teams::where('id', '!=', $teammemberid)->paginate(4); 
    return view('team.singleprofile', compact('team', 'otherTeams'));
}

    public function history()
    {
        return view('team.history');
    }

     public function values()
     {
         return view('team.values');
     }
     public function moveFile($file){
        $directory='uploads/teams/';
        
        $file_name=md5(microtime(true) . mt_Rand()) . '.' . $file->getClientOriginalExtension();
        $path=$directory . $file_name;
        $file->move(storage_path('app/public/' .$directory),$file_name);
        // dd($file);
        return array($path,$file_name);
    } 
}
