<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "karyawan".
 *
 * @property int $id
 * @property string $nip
 * @property string $nik
 * @property string $nama
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $telpon
 * @property string $agama
 * @property string $status_nikah
 * @property string $alamat
 * @property int $golongan_id
 * @property string $foto
 *
 * @property Cuti[] $cutis
 * @property Golongan $golongan
 * @property Lembur[] $lemburs
 * @property Penggajian[] $penggajians
 */
class Karyawan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'karyawan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nik', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'telpon', 'agama', 'status_nikah', 'alamat', 'golongan_id', 'foto'], 'required'],
            [['jenis_kelamin', 'status_nikah', 'alamat'], 'string'],
            [['tanggal_lahir'], 'safe'],
            [['golongan_id'], 'integer'],
            [['nip', 'nik', 'telpon'], 'string', 'max' => 12],
            [['nama', 'tempat_lahir'], 'string', 'max' => 100],
            [['agama'], 'string', 'max' => 13],
            [['foto'], 'string', 'max' => 150],
            [['golongan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Golongan::className(), 'targetAttribute' => ['golongan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'nik' => 'Nik',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'telpon' => 'Telpon',
            'agama' => 'Agama',
            'status_nikah' => 'Status Nikah',
            'alamat' => 'Alamat',
            'golongan_id' => 'Golongan ID',
            'foto' => 'Foto',
        ];
    }

    /**
     * Gets query for [[Cutis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCutis()
    {
        return $this->hasMany(Cuti::className(), ['karyawan_id' => 'id']);
    }

    /**
     * Gets query for [[Golongan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGolongan()
    {
        return $this->hasOne(Golongan::className(), ['id' => 'golongan_id']);
    }

    /**
     * Gets query for [[Lemburs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLemburs()
    {
        return $this->hasMany(Lembur::className(), ['karyawan_id' => 'id']);
    }

    /**
     * Gets query for [[Penggajians]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenggajians()
    {
        return $this->hasMany(Penggajian::className(), ['karyawan_id' => 'id']);
    }
}
