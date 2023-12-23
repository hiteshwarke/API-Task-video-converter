<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Http\Requests\MoviePostRequest;
use App\Http\Requests\MovieUpdateRequest;


class APIBaseController extends Controller
{
    public function getAllMovies()
    {
        try {
            return response()->json(['success'=> true, 'data' => Movies::all(), 'message' => 'all movies '], 200);
        } catch (Exception $e) {
            return response()->json(['success'=> false,'error' => $e->getMessage()], 500);
        }        
    }

    public function getMoviesById($id)
    {
        try {
            return response()->json(['success'=> true, 'data' => Movies::findOrFail($id), 'message' => 'get movie'], 200);
        } catch (Exception $e) {
            return response()->json(['success'=> false, 'error' => $e->getMessage()], 500);
        }   
    }

    public function saveMovie(MoviePostRequest $request)
    {
        try {
            // validation 
            $validated = $request->validated();
            
            // Add Movie
            $movies = new Movies;
            $movies->movie_name      =   $request->movie_name;
            $movies->relise_date     =   $request->relise_date;
            $movies->director_name   =   $request->director_name;
            $movies->save();

            return response()->json(['success'=> true, 'data' => $movies, 'message' => 'movie Added'], 200);
        } catch (Exception $e) {
            return response()->json(['success'=> false, 'error' => $e->getMessage()], 500);
        }

    }

    public function updateMoviesByID(MovieUpdateRequest $request, $id)
    {
        try {
                // dd($request->all(), $request->get('movie_name'), $request['movie_name']);
                // valid ID
                $validated = $request->validated();
                // dd("-----", $validated, $id);
                // update Movie
                $movieObj = Movies::where('id', $id)->update([
                    'movie_name'      =>   $request->movie_name,
                    'relise_date'     =>   $request->relise_date,
                    'director_name'   =>   $request->director_name
                ]);

            return response()->json(['success'=> true, 'data' => $movieObj, 'message' => 'movie updated'], 200);
        } catch (Exception $e) {
            return response()->json(['success'=> false, 'error' => $e->getMessage()], 500);
        }
    }

    public function removeMovies(Request $request, $id)
    {
        try {
                // valid ID
                $movieObj = Movies::findOrFail($id);
                
                if($movieObj) {
                    // Soft-Delete Record
                    $movieObj->delete();
                }

            return response()->json(['success'=> true, 'data' => null, 'message' => 'movies deleted'], 200);
        } catch (Exception $e) {
            return response()->json(['success'=> false, 'error' => $e->getMessage()], 500);
        }
    }
}
