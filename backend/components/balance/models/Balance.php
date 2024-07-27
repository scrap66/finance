<?php

namespace app\backend\components\balance\models;

use yii\db\ActiveRecord;

class Balance extends ActiveRecord
{
    /**
     * @inheritDoc
     */
    public static function tableName(){
        return '{{%balance}}';
    }

    public function rules(){
        return [
          [['id', 'balance', 'date_update'],'required'],
            'date_update' => 'date',
            'balance' => 'float',
        ];
    }


}