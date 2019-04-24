<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Validator;
use Auth;

class EventController extends Controller
{
       public function index()
            {
                $user = Auth::user();
                $events = [];
                $data = Event::all();
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->title,
                            true,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.' +1
                                day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => '#428bca',
                             'url' => 'pass here url and any route',
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('fullcalender', compact('calendar'))->withUser($user);
            }

    public function store(Request $request, $user_id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        if ($validator->fails()) {
            \Session::flash('warnning','Please enter the valid details');
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
        $user = Auth::user();
        $event = new Event;
        $event->title = $request['title'];
        $event->start_date = $request['start_date'];
        $event->end_date = $request['end_date'];
        $event->user_id = $request['user_id'];

        $event->save();

        \Session::flash('success','Event added successfully.');
        return Redirect::to('/events');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit')->withEvent($event);
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $event = Event::find($id);
        $event->title = $request->title;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        \Session::flash('success','Event updated successfully.');

        return Redirect::to('/events');

    }

    public function directory()
    {
        $user = Auth::user();
        $events = Event::all();
        return view('events.index')->withEvents($events)->withUser($user);
    }
    public function destroy($id)
    {
        $user = Auth::user();
        $event = Event::find($id);
        $events = Event::all();
       /*$user_id = $event->user->id;*/ 
        $event->delete();

    return view('dashboards.index')->withUser($user);        
    }
}