<?php

namespace app\models;

use \yii\db\ActiveRecord;

/**
 * Country Model
 *
 * @author Thanh Le <thanhle09t2bkdn@gmail.com>
 */
class Country extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'country';
    }

    /**
     * Define rules for validation
     */
    public function rules() {
        return [
            [['code', 'name', 'population'], 'required'],
            [['population'], 'integer'],
            [['code'], 'unique'],
            [['code'], 'string', 'length' => 2],
            [['name'], 'string', 'max' => 52],
        ];
    }

}
