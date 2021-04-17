<?php

namespace App\Utility;

class AppUtility {
    public function commonSingle($dataToDisplay ,$modelName){
        if(!$dataToDisplay) {
            return response(['message' => $modelName.' not found for the provided info']);
        }

        return response(['message' => 'request successful', $modelName => $dataToDisplay]);
    }
    public function commonUpdate($request, $dataToBeUpdated, $ModelName){
        //This is common function for update of controller and the values are passed from the controller.
        $newData = $request->all();

        if($dataToBeUpdated) {
            foreach ($newData as $key => $value) {
                if (!strcmp($key,'id')){
                    continue;
                } else {
                    $dataToBeUpdated[$key] = $newData[$key];
                }
            }
            $dataToBeUpdated->save();
            return response(['data' => $dataToBeUpdated]);
        } else {
            $message = $ModelName.' not found!';
            return response(['message'=> $message]);
        }

    }
    public function commonCreate($request, $newObject){
    $tempData = $request->all();
    foreach ($tempData as $key => $value) {
            $newObject[$key] = $tempData[$key];
        }
        $newObject->save();
}
    public function commonUpdateWithoutId($request, $dataToBeUpdated, $ModelName){
        //This is common function for update of controller and the values are passed from the controller.
        $newData = $request->all();

        if($dataToBeUpdated) {
            foreach ($newData as $key => $value) {
                    $dataToBeUpdated[$key] = $newData[$key];
            }
            $dataToBeUpdated->save();
            return response(['data' => $dataToBeUpdated]);
        } else {
            $message = $ModelName.' not found!';
            return response(['message'=> $message]);
        }

    }
}



// if($isSuccessful) {
        //     $updatedData = District::find($request->id);
        //     return response(['data' => $updatedData]);
        // }else{
        //     return response(['message'=>'District not found!']);
        // }
