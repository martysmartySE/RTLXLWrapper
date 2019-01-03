<?php

namespace martysmartySE\RTLXLWrapper;

/*
 * This is a first initial wrapper. It contains the API requests I require in my project. Feel free to send in new features or requests, and I'll take a look at it
 *
 */
class RTLXLWrapper
{

    public function getShows(){

        $shows = [];

        $data = json_decode(\Httpful\Request::get("https://xlapi.rtl.nl/version=1/fun=az/model=avod")->expectsJson()->send());

        foreach($data->abstracts as $item){

            array_push($shows, $item);

        }

        return $shows;

    }

    public function getShowSeasons($showid){

        $seasons = [];

        $data = json_decode(\Httpful\Request::get("https://xlapi.rtl.nl/version=1/fun=progclasses/ak=" . $showid)->expectsJson()->send());

        foreach($data->classes as $class){

            if($class->classname == "uitzending"){

                foreach($class->seasons as $item){

                    array_push($seasons, $item);

                }

            }

        }

        return $seasons;

    }

    public function getSeasonEpisodes($showid, $season_key){

        $episodes = [];

        $data = json_decode(\Httpful\Request::get("https://xlapi.rtl.nl/version=1/fun=progeps/model=svod/ak=$showid/sz=6/pg=1/sk=$season_key")->expectsJson()->send());

        foreach($data->material as $item) {

            array_push($episodes, $item);

        }

        return $episodes;

    }

}