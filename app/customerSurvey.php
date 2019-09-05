<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerSurvey extends Model
{
    protected $fillable = 
    [
    	'Name',
    	'Organization',
    	'Ticketing',
    	'Transport',
    	'Destinations/HotelBookings',
    	'VisaDesk',
    	'Turn-aroundTime',
    	'OutOfTheBoxSolutions',
    	'RateThe24hrDesk',
    	'RelationshipWithAccountManager'
        'Suggestions'
    ];
}
