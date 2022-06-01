<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "license".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $serial
 * @property string|null $public_key
 * @property string|null $private_key
 * @property string|null $status
 * @property string|null $mail
 * @property string|null $commit
 * @property string|null $id_member
 * @property string|null $type
 * @property string|null $inn
 * @property string|null $payment
 * @property string|null $valid_date
 * @property string|null $date_start
 * @property string|null $temp1
 * @property string|null $temp2
 * @property string|null $temp3
 * @property string|null $temp4
 * @property string|null $temp5
 * @property string|null $temp6
 * @property int|null $lic_type
 * @property int|null $temp7
 * @property int|null $temp8
 * @property int|null $temp9
 */
class License extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'license';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lic_type', 'temp7', 'temp8', 'temp9'], 'integer'],
            [ ['name','mail','payment','valid_date','date_start'], 'required'],
            [['name', 'serial', 'public_key', 'private_key', 'status', 'mail', 'commit', 'id_member', 'type', 'inn', 'payment', 'valid_date', 'date_start', 'temp1', 'temp2', 'temp3', 'temp4', 'temp5', 'temp6'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'serial' => 'Serial',
            'public_key' => 'Public Key',
            'private_key' => 'Private Key',
            'status' => 'Status',
            'mail' => 'Mail',
            'commit' => 'Commit',
            'id_member' => 'Id Member',
            'type' => 'Type',
            'inn' => 'Inn',
            'payment' => 'Payment',
            'valid_date' => 'Valid Date',
            'date_start' => 'Date Start',
            'temp1' => 'Temp1',
            'temp2' => 'Temp2',
            'temp3' => 'Temp3',
            'temp4' => 'Temp4',
            'temp5' => 'Temp5',
            'temp6' => 'Temp6',
            'lic_type' => 'Lic Type',
            'temp7' => 'Temp7',
            'temp8' => 'Temp8',
            'temp9' => 'Temp9',
        ];
    }
}
