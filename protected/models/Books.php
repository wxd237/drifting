<?php

/**
 * This is the model class for table "books".
 *
 * The followings are the available columns in table 'books':
 * @property integer $bookid
 * @property integer $categoryid
 * @property string $bookname
 * @property integer $luserid
 * @property string $detail
 * @property string $photo
 * @property integer $commend
 * @property string $lendtime
 * @property integer $buserid
 * @property string $borrowtime
 * @property string $author
 * @property string $public
 * @property integer $number
 *
 * The followings are the available model relations:
 * @property Categories $category
 */
class Books extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'books';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoryid, bookname, luserid, detail, photo, lendtime, buserid, borrowtime, author, public', 'required'),
			array('categoryid, luserid, commend, buserid, number', 'numerical', 'integerOnly'=>true),
			array('bookname', 'length', 'max'=>50),
			array('detail', 'length', 'max'=>300),
			array('photo, author, public', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('bookid, categoryid, bookname, luserid, detail, photo, commend, lendtime, buserid, borrowtime, author, public, number', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'category' => array(self::BELONGS_TO, 'Categories', 'categoryid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bookid' => '书号',
			'categoryid' => '类别',
			'bookname' => '书名',
			'luserid' => '上位漂流者',
			'detail' => '详细',
			'photo' => '图片',
			'commend' => 'Commend',
			'lendtime' => '上次漂流时间',
			'buserid' => 'Buserid',
			'borrowtime' => 'Borrowtime',
			'author' => '作者',
			'public' => '出版社',
			'number' => '数量',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('bookid',$this->bookid);
		$criteria->compare('categoryid',$this->categoryid);
		$criteria->compare('bookname',$this->bookname,true);
		$criteria->compare('luserid',$this->luserid);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('commend',$this->commend);
		$criteria->compare('lendtime',$this->lendtime,true);
		$criteria->compare('buserid',$this->buserid);
		$criteria->compare('borrowtime',$this->borrowtime,true);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('public',$this->public,true);
		$criteria->compare('number',$this->number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Books the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
