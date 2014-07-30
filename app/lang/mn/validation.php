<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"         => '":attribute"-ийг зөвшөөрөх ёстой.',
	"active_url"       => '":attribute" буруу URL хаяг байна.',
	"after"            => ":attribute нь :date-ээс хойших огноо байх ёстой.",
	"alpha"            => ":attribute нь зөвхөн үсэг агуулах ёстой.",
	"alpha_dash"       => ":attribute нь зөвхөн үсэг, тоо болон _ . - тэмдэглэгээ л агуулах ёстой.",
	"alpha_num"        => ":attribute нь зөвхөн үсэг, тоо агуулах ёстой.",
	"array"            => ":attribute нь массив байх ёстой.",
	"before"           => ":attribute нь :date-ээс өмнөх огноо байх ёстой.",
	"between"          => array(
		"numeric" => ":attribute нь :min - :max хооронд байх ёстой.",
		"file"    => ":attribute нь :min - :max килобайтын хэмжээтэй байх ёстой.",
		"string"  => ":attribute нь :min - :max урттай тэмдэгт мөр байх ёстой.",
		"array"   => ":attribute нь :min - :max зүйлтэй байх ёстой.",
	),
	"confirmed"        => ":attribute баталгаажуулах талбаруудын утга тохирохгүй байна.",
	"date"             => ":attribute нь форматтай байх ёстой.",
	"date_format"      => ":attribute-ийн формат :format-ээс өөр байна.",
	"different"        => ":attribute болон :other талбарууд өөр утгатай байх ёстой.",
	"digits"           => ":attribute нь :digits оронтой тоо байх ёстой.",
	"digits_between"   => ":attribute нь :min - :max оронтой тоо байх ёстой.",
	"email"            => ":attribute э-мэйл хаяг буруу байна.",
	"exists"           => "Сонгосон :attribute нь буруу эсвэл аль хэдийн бүртгэгдсэн байна.",
	"image"            => ":attribute нь зураг байх ёстой.",
	"in"               => "Сонгосон :attribute нь буруу байна.",
	"integer"          => ":attribute нь бүхэл тоо байх ёстой.",
	"ip"               => ":attribute нь хүчинтэй IP хаяг байх ёстой.",
	"max"              => array(
		"numeric" => ":attribute нь магадгүй :max-ээс бага утгатай авах байх.",
		"file"    => ":attribute нь магадгүй :max килобайтаас бага байх хэмжээтэй байх шаардлагатай байх.",
		"string"  => ":attribute нь :max тэмдэгтээс бага урттай байх ёстой.",
		"array"   => ":attribute нь :max-ээс илүүгүй зүйл агуулах байх.",
	),
	"mimes"            => ":attribute нь дараах төрлийн файл байх ёстой: :values.",
	"min"              => array(
		"numeric" => ":attribute нь хамгийн багадаа :min байх ёстой.",
		"file"    => ":attribute нь хамгийн багадаа :min килобайт хэмжээтэй байх ёстой.",
		"string"  => ":attribute нь хамгийн багадаа :min тэмдэгтийн урттай байх ёстой.",
		"array"   => ":attribute нь хамгийн багадаа :min зүйлтэй байх ёстой.",
	),
	"not_in"           => "Сонгосон :attribute буруу байна.",
	"numeric"          => ":attribute нь тоо байх ёстой.",
	"regex"            => ":attribute-ийн формат буруу байна.",
	"required"         => ":attribute талбарыг бөглөх шаардлагатай.",
	"required_if"      => "Хэрэв :other нь :value байх бол :attribute талбарыг бөглөх шаардлагатай.",
	"required_with"    => "Хэрэв :values байх бол :attribute талбарыг бөглөх шаардлагатай.",
	"required_without" => "Хэрэв :values байхгүй бол :attribute талбарыг заавал бөглөх шаардлагатай.",
	"same"             => ":attribute болон :other нь адил байх ёстой.",
	"size"             => array(
		"numeric" => ":attribute нь :size хэмжээтэй байх ёстой.",
		"file"    => ":attribute нь :size килобайт байх ёстой.",
		"string"  => ":attribute нь :size тэмгдэттэй байх ёстой.",
		"array"   => ":attribute нь :size зүйлтэй байх ёстой.",
	),
	"unique"           => ":attribute нь аль хэдийн өгөгдсөн байна. Та өөр утга ашиглана уу.",
	"url"              => ":attribute буруу форматтай байна.",

	"captcha"		   => "Зурагт байгаа үгийг буруу оруулсан байна.",
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'password.required'		=> "Нууц үг заавал оруулна!",
		'captcha.required'		=> "Баталгаажуулах талбарыг бөглөх шаардлагатай.",
		),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
		"login"		=> "Нэвтрэх нэр",
		"password"	=> "Нууц үг",
		"email" 	=> "Э-мэйл",
		"captcha" 	=> "Баталгаажуулах",
		),

);
