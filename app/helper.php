<?php
Form::macro('countries', function($name = "country", $selected = null) {
	
	$countries = array(
		''=>"Select a Country",
		'ac'=>'Ascension Island',
    'ad'=>'Andorra',
    'ae'=>'United Arab Emirates',
    'af'=>'Afghanistan',
    'ag'=>'Antigua And Barbuda',
    'ai'=>'Anguilla',
    'al'=>'Albania',
    'am'=>'Armenia',
    'an'=>'Netherlands Antilles',
    'ao'=>'Angola',
    'aq'=>'Antarctica',
    'ar'=>'Argentina',
    'as'=>'American Samoa',
    'at'=>'Austria',
    'au'=>'Australia',
    'aw'=>'Aruba',
    'ax'=>'Ãƒâ€¦land',
    'az'=>'Azerbaijan',
    'ba'=>'Bosnia And Herzegovina',
    'bb'=>'Barbados',
    'be'=>'Belgium',
    'bd'=>'Bangladesh',
    'bf'=>'Burkina Faso',
    'bg'=>'Bulgaria',
    'bh'=>'Bahrain',
    'bi'=>'Burundi',
    'bj'=>'Benin',
    'bm'=>'Bermuda',
    'bn'=>'Brunei Darussalam',
    'bo'=>'Bolivia',
    'br'=>'Brazil',
    'bs'=>'Bahamas',
    'bt'=>'Bhutan',
    'bv'=>'Bouvet Island',
    'bw'=>'Botswana',
    'by'=>'Belarus',
    'bz'=>'Belize',
    'ca'=>'Canada',
    'cd'=>'Congo',
    'cg'=>'Congo (Republic)',
    'ch'=>'Switzerland',
    'ck'=>'Cook Islands',
    'cl'=>'Chile',
    'cm'=>'Cameroon',
    'cn'=>'Republic of China',
    'co'=>'Colombia',
    'cr'=>'Costa Rica',
    'cu'=>'Cuba',
    'cv'=>'Cape Verde',
    'cx'=>'Christmas Island',
    'cy'=>'Cyprus',
    'cz'=>'Czech Republic',
    'de'=>'Germany',
    'dj'=>'Djibouti',
    'dk'=>'Denmark',
    'dm'=>'Dominica',
    'do'=>'Dominican Republic',
    'dz'=>'Algeria',
    'ec'=>'Ecuador',
    'ee'=>'Estonia',
    'eg'=>'Egypt',
    'er'=>'Eritrea',
    'es'=>'Spain',
    'et'=>'Ethiopia',
    'eU'=>'European Union',
    'fi'=>'Finland',
    'fj'=>'Fiji',
    'fo'=>'Faroe Islands',
    'fr'=>'France',
    'ga'=>'Gabon',
    'gb'=>'United Kingdom',
    'gd'=>'Grenada',
    'ge'=>'Georgia',
    'gf'=>'French Guiana',
    'gg'=>'Guernsey',
    'gh'=>'Ghana',
    'gi'=>'Gibraltar',
    'gl'=>'Greenland',
    'gm'=>'Gambia',
    'gn'=>'Guinea',
    'gp'=>'Guadeloupe',
    'gq'=>'Equatorial Guinea',
    'gr'=>'Greece',
    'gt'=>'Guatemala',
    'gu'=>'Guam',
    'gw'=>'Guinea-Bissau',
    'gy'=>'Guyana',
    'hk'=>'Hong Kong',
    'hn'=>'Honduras',
    'hr'=>'Croatia ',
    'ht'=>'Haiti',
    'hu'=>'Hungary',
    'id'=>'Indonesia',
    'ie'=>'Ireland',
    'il'=>'Israel',
    'im'=>'Isle of Man',
    'in'=>'India',
    'iq'=>'Iraq',
    'ir'=>'Iran ',
    'is'=>'Iceland',
    'it'=>'Italy',
    'je'=>'Jersey',
    'jm'=>'Jamaica',
    'jo'=>'Jordan',
    'jp'=>'Japan',
    'ke'=>'Kenya',
    'kg'=>'Kyrgyzstan',
    'kh'=>'Cambodia',
    'ki'=>'Kiribati',
    'km'=>'Comoros',
    'kn'=>'Saint Kitts And Nevis',
    'kr'=>'Korea, Republic Of',
    'kw'=>'Kuwait',
    'ky'=>'Cayman Islands',
    'kz'=>'Kazakhstan',
    'lb'=>'Lebanon',
    'lc'=>'Saint Lucia',
    'li'=>'Liechtenstein',
    'lk'=>'Sri Lanka',
    'lr'=>'Liberia',
    'ls'=>'Lesotho',
    'lt'=>'Lithuania',
    'lu'=>'Luxembourg',
    'lv'=>'Latvia',
    'ly'=>'Libyan Arab Jamahiriya',
    'ma'=>'Morocco',
    'mc'=>'Monaco',
    'md'=>'Moldova, Republic Of',
    'me'=>'Montenegro',
    'mg'=>'Madagascar',
    'mh'=>'Marshall Islands',
    'mk'=>'Macedonia',
    'ml'=>'Mali',
    'mm'=>'Myanmar',
    'mn'=>'Mongolia',
    'mo'=>'Macau',
    'mp'=>'Northern Mariana Islands',
    'mq'=>'Martinique',
    'mr'=>'Mauritania',
    'ms'=>'Montserrat',
    'mt'=>'Malta',
    'mu'=>'Mauritius',
    'mv'=>'Maldives',
    'mw'=>'Malawi',
    'mx'=>'Mexico',
    'my'=>'Malaysia',
    'mz'=>'Mozambique',
    'na'=>'Namibia',
    'nc'=>'New Caledonia',
    'ne'=>'Niger',
    'nf'=>'Norfolk Island',
    'ng'=>'Nigeria',
    'ni'=>'Nicaragua',
    'nl'=>'Netherlands',
    'no'=>'Norway',
    'np'=>'Nepal',
    'nr'=>'Nauru',
    'nu'=>'Niue',
    'nz'=>'New Zealand',
    'om'=>'Oman',
    'pa'=>'Panama',
    'pe'=>'Peru',
    'pf'=>'French Polynesia',
    'pg'=>'Papua New Guinea',
    'ph'=>'Philippines',
    'pk'=>'Pakistan',
    'pl'=>'Poland',
    'pm'=>'St. Pierre And Miquelon',
    'pn'=>'Pitcairn',
    'pr'=>'Puerto Rico',
    'ps'=>'Palestine',
    'pt'=>'Portugal',
    'pw'=>'Palau',
    'py'=>'Paraguay',
    'qa'=>'Qatar',
    're'=>'Reunion',
    'ro'=>'Romania',
    'rs'=>'Serbia',
    'ru'=>'Russian Federation',
    'rw'=>'Rwanda',
    'sa'=>'Saudi Arabia',
    'uk'=>'Scotland',
    'sb'=>'Solomon Islands',
    'sc'=>'Seychelles',
    'sd'=>'Sudan',
    'se'=>'Sweden',
    'sg'=>'Singapore',
    'sh'=>'St. Helena',
    'si'=>'Slovenia',
    'th'=>'Thailand',
    'tj'=>'Tajikistan',
    'tk'=>'Tokelau',
    'ti'=>'East Timor (new code)',
    'tm'=>'Turkmenistan',
    'tn'=>'Tunisia',
    'to'=>'Tonga',
    'tp'=>'East Timor (old code)',
    'tr'=>'Turkey',
    'tt'=>'Trinidad And Tobago',
    'tv'=>'Tuvalu',
    'tw'=>'Taiwan',
    'tz'=>'Tanzania, United Republic Of',
    'ua'=>'Ukraine',
    'ug'=>'Uganda',
    'ye'=>'Yemen',
    'yt'=>'Mayotte',
    'za'=>'South Africa',
    'zm'=>'Zambia',
    'zw'=>'Zimbabwe'
	);
	
	$select = '<select name="'.$name.'" class="form-control">';
	
	foreach ($countries as $abbr => $country)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$country.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});



//Wanted Positon array

Form::macro('position', function($name = "position", $selected = null) {
	
	$position = array(
	'Php Developer'=>'Php Developer',
    'Php Software Specialist'=>'Php Software Specialist',
    'Architecture'=>'Architecture',
    'Dizayn Architecture'=>'Dizayn Architecture',
    'Electrical Journeyman Craftsman'=>'Electrical Journeyman Craftsman',
    'Musician'=>'Musician',
    'Dizayner'=>'Dizayner',
    'Computer Instructor'=>'Computer Instructor',
    'Computer Engineering'=>'Computer Engineering'
	);
	
	$select = '<select name="'.$name.'" class="form-control" multiple="">';
	
	foreach ($position as $abbr => $position)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$position.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});


//Sector array

Form::macro('sector', function($name = "sector", $selected = null) {
    $uyeler = DB::table('Ads')->lists('sector','id');

	$sector = array(
    'bf'=>'Bank and Finance',
    'res'=>'Research',
    'it'=>'Information Technology',
    'pr'=>'Public Relations',
    'media'=>'Media',
    'automotive'=>'Automotive',
    'adver'=>'Advertising',
    'textile'=>'Textile'
	);
	
	$select = '<select name="'.$name.'" class="form-control" multiple="">';
	
	foreach ($sector as $abbr => $sector)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$sector.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});


//Sector array

Form::macro('area', function($name = "area", $selected = null) {
	
	$area = array(
	'rd'=>'Research and Development',
    'bf'=>'Bank and Finance',
    'res'=>'Research',
    'it'=>'Information Technology',
    'pr'=>'Public Relations',
    'media'=>'Media',
    'automotive'=>'Automotive',
    'adver'=>'Advertising',
    'textile'=>'Textile'
	);
	
	$select = '<select name="'.$name.'" class="form-control" multiple="">';
	
	foreach ($area as $abbr => $area)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$area.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});


//Sector pos

Form::macro('pos', function($name = "pos", $selected = null) {
	
	$pos = array(
		''=>"Select position in the company",
	'Senior Executives'=>'Senior Executives',
    'Mid-level Managers'=>'Mid-level Managers',
    'Expert'=>'Expert',
    'Technical Expert'=>'Technical Expert',
    'Expert Helper'=>'Expert Helper',
    'Personnel'=>'Personnel',
    'Office Personnel'=>'Office Personnel',
    'Manager Candidates'=>'Manager Candidates',
    'Employee'=>'Employee',
    'Advisor'=>'Advisor',
    'Chef'=>'Chef',
    'Academics'=>'Academics',
    'Other'=>'Other'
	);
	
	$select = '<select name="'.$name.'" class="form-control" >';
	
	foreach ($pos as $abbr => $pos)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$pos.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});


//Sector pos

Form::macro('style', function($name = "style", $selected = null) {
	
	$style = array(
		''=>"Select way it works",
	'Part-Time'=>'Part-Time',
    'Full-Time'=>'Full-Time',
    'Periodical'=>'Periodical',
    'Contractual'=>'Contractual',
    'Intern'=>'Intern'
	);
	
	$select = '<select name="'.$name.'" class="form-control" >';
	
	foreach ($style as $abbr => $style)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$style.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});

//Sector exp

Form::macro('exp', function($name = "exp", $selected = null) {
	
	$exp = array(
		''=>"Select a experience",
	'Inexperienced'=>'Inexperienced',
    'Less than 2 years'=>'Less than 2 years',
    '2-5 years'=>'2-5 years',
    '5-10 years'=>'5-10 years',
    'More than 10 years'=>'More than 10 years'
	);
	
	$select = '<select name="'.$name.'" class="form-control" >';
	
	foreach ($exp as $abbr => $exp)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$exp.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});

//Sector degree

Form::macro('degree', function($name = "degree", $selected = null) {
	
	$degree = array(
	'Primary School'=>'Primary School',
    'High School'=>'High School',
    'Bachelor'=>'Bachelor',
    'Master of Science'=>'Master of Science',
    'Professional Master'=>'Professional Master',
    'Doctora'=>'Doctora'
	);
	
	$select = '<select name="'.$name.'" class="form-control" multiple="">';
	
	foreach ($degree as $abbr => $degree)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$degree.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});


//Sector gender   

Form::macro('gender', function($name = "gender", $selected = null) {
	
	$gender = array(
	'Does not matter'=>'Does not matter',
    'Male'=>'Male',
    'Female'=>'Female'
	);
	
	$select = '<select name="'.$name.'" class="form-control" >';
	
	foreach ($gender as $abbr => $gender)
	{
		$select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$gender.'</option> ';
	}
	
	$select .= '</select>';
	
	return $select;

});

//   number_of_staff

Form::macro('number_of_staff', function($name = "number_of_staff", $selected = null) {
    
    $number_of_staff = array(
    '1'=>'1',
    '2'=>'2',
    '3'=>'3',
    '4'=>'4',
    '5'=>'5',
    '6'=>'6',
    '7'=>'7'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($number_of_staff as $abbr => $number_of_staff)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$number_of_staff.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


//   pub_time 

Form::macro('pub_time', function($name = "pub_time", $selected = null) {
    
    $pub_time = array(
    '60 Days'=>'60 Days',
    '30 Days'=>'30 Days',
    '15 Days'=>'15 Days',
    '7 Days'=>'7 Days'
    );
    
    $select = '<select name="'.$name.'" class="form-control" multiple="">';
    
    foreach ($pub_time as $abbr => $pub_time)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$pub_time.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});


//   work_place


Form::macro('work_place', function($name = "work_place", $selected = null) {
    
    $work_place = array(
        '' => 'Select to Work Place',
        'Tirana' => 'Tirana*',
'Durres' => 'Durres',
'Vlore' => 'Vlore',
'Elbasan' => 'Elbasan',
'Shkoder' => 'Shkoder',
'Fier' => 'Fier',
'Korce' => 'Korce',
'Gjirokaster' => 'Gjirokaster',
'Berat' => 'Berat',
'Lushnje' => 'Lushnje',
    'Ballsh' => 'Ballsh',
'Bilisht' => 'Bilisht',
'Bulqizë' => 'Bulqizë',
'Burrel' => 'Burrel',
'Cërrik' => 'Cërrik',
'Çorovodë' => 'Çorovodë',
'Delvinë' => 'Delvinë',
'Divjakë' => 'Divjakë',
'Ersekë' => 'Ersekë',
'Fushë-Arrëz' => 'Fushë-Arrëz',
'Fushë-Krujë' => 'Fushë-Krujë',
'Gramsh' => 'Gramsh',
'Himarë' => 'Himarë',
'Kamëz' => 'Kamëz',
'Kavajë' => 'Kavajë',
'Këlcyrë' => 'Këlcyrë',
'Klos' => 'Klos',
'Konispol' => 'Konispol',
'Koplik' => 'Koplik',
'Krastë' => 'Krastë',
'Krujë' => 'Krujë',
'Krumë' => 'Krumë',
'Kuçovë' => 'Kuçovë',
'Kukës' => 'Kukës',
'Laç' => 'Laç',
'Leskovik' => 'Leskovik',
'Lezhë' => 'Lezhë',
'Libohovë' => 'Libohovë',
'Librazhd' => 'Librazhd',
'Maliq' => 'Maliq',
'Mamurras' => 'Mamurras',
'Memaliaj' => 'Memaliaj',
'Orikum' => 'Orikum',
 'Patos' => 'Patos',
'Peqin' => 'Peqin',
'Përmet' => 'Përmet',
'Përrenjas' => 'Përrenjas',
'Peshkopi' => 'Peshkopi',
'Pogradec' => 'Pogradec',
'Poliçan' => 'Poliçan',
'Pukë' => 'Pukë',
'Roskovec' =>'Roskovec',
'Rrëshen' => 'Rrëshen',
'Rrogozhinë' => 'Rrogozhinë',
'Rubik' => 'Rubik',
'Sarandë' => 'Sarandë',
'Selenicë' => 'Selenicë',
'Selitë' => 'Selitë',
'Shëngjin' => 'Shëngjin',
'Shijak' => 'Shijak',
'Tepelenë' => 'Tepelenë',
'Tropoja' => 'Tropoja',
'Ulëz' => 'Ulëz',
'Urë Vajgurore' => 'Urë Vajgurore',
'Vorë' => 'Vorë'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($work_place as $abbr => $work_place)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$work_place.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});

//languages 

Form::macro('languages', function($name = "languages", $selected = null) {
    
    $languages = array(
        '' => 'Select Ads Languages',
    'Albanian'=>'Albanian',
    'English'=>'English',
    'Turkish'=>'Turkish',
    'Italian'=>'Italian',
    'Spanish'=>'Spanish',
    'German'=>'German',
    'French'=>'French'
    );
    
    $select = '<select name="'.$name.'" class="form-control" >';
    
    foreach ($languages as $abbr => $languages)
    {
        $select .= '<option value="'.$abbr.'"'.($selected == $abbr ? ' selected="selected"' : '').'>'.$languages.'</option> ';
    }
    
    $select .= '</select>';
    
    return $select;

});