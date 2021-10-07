<?php

namespace Website\Controllers;


class TestController {
    
    public function queriesTesten(){

        //TODO: Alle topics ophalen
        //$topics = getAllTopics();

        //TODO: Een nieuwe topic toevoegen
        // $title = 'Depressie 4';
        // $description = 'aasdd';
        // $result = addTopic($title, $description);

        //TODO: Topic aanpassen
        // $newTitle = 'Slaapproblemen :-(';
        // $newDescription = 'Nieuwe uitleg -:(';
        // $topicId = 6;
        // $result = updateTopic($topicId, $newTitle, $newDescription);

        //TODO: Topic verwijderen
        $topicToDelete = 4;
        $rowsDeleted = deleteTopic($topicToDelete);
        var_dump($rowsDeleted);

    }
}
