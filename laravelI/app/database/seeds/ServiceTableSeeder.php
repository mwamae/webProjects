<?php

class ServiceTableSeeder extends Seeder {
    public function run(){
        Service::create(
            array(
                'title'=>'Cytonn Technologies',
                'description'=>'Developing Web Applications'
            )
        );

        Service::create(
            array(
                'title'=>'Cytonn Real Estates',
                'description'=>'Developing Real Estates'
            )
        );

        Service::create(
            array(
                'title'=>'Cytonn Investments',
                'description'=>'Investiment Banking'
            )
        );
    }

}