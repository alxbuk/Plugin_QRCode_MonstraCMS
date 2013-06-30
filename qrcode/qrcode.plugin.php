<?php
/**
*  QRcode generator
*
*  @package Monstra
*  @subpackage Plugins
*  @author AlxBuk
*  @copyright 2013 AlxBuk.ru
*  @version 1.0.0
*
*/
// Register plugin

// Use shortcode
// {qrc fname="Alx" lname="Buk" phone="79131509010" urllink="monstra.org" postname="alexbukfam" postdomain="gmail.com" note="ICQ:132075 Skype:alexbukfam"}


Plugin::register( __FILE__,                    
__('QRcode'),
__('qrcode - Генератор QRcode'),  
'1.0.0',
'AlxBuk',                 
'http://alxbuk.ru/');


if (!BACKEND) 
Shortcode::add('qrc', 'qrc::show');


class qrc {
	public static function show($attributes){
		extract($attributes);
		$var1 = $fname;
		$var2 = $lname;
		$var3 = $phone;
		$var4 = $urllink;
		$var5 = $postname;
		$var6 = $postdomain;
		$var7 = $note;
		if(isset($fname)) {return '<img src="http://qrcoder.ru/code/?BEGIN%3AVCARD%0AN%3A'.$var2.'%3B'.$var1.'%0ATEL%3A%2B'.$var3.'%0AURL%3Ahttp%3A%2F%2F'.$var4.'%0AEMAIL%3A'.$var5.'%40'.$var6.'%0ANOTE%3A'.$var7.'%0AEND%3AVCARD&2&0" style="width:106px;height:106px;border:0px;" title="Используй QR код '.$var1.' '.$var2.'" alt="'.$var1.' '.$var2.'"/>';}
	}}