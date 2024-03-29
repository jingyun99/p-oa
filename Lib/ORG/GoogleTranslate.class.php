<?php
/**
 * @author 黄建文 hjwtp2005@qq.com
 * @version 1.0
 * @date 2012-12-08
 * 利用google的接口中进行翻译
 * 
 *
 */
class GoogleTranslate {

	/**
	 * 翻译
	 *
	 * @param unknown_type $text
	 * @param unknown_type $tl
	 * @param unknown_type $sl
	 * @param unknown_type $ie
	 * @return unknown
	 */
	public function translate($text='',$tl='en',$sl='auto',$ie='UTF-8'){
        $ch = curl_init('http://translate.google.cn/');
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"&hl=zh-CN&sl={$sl}&ie={$ie}&tl={$tl}&text=".urlencode($text)); 
        $html = curl_exec($ch);
        preg_match('#<span id=result_box class="short_text">(.*?)</span></div>#',$html,$doc);
        return strip_tags($doc['1'],'<br>');
    }
    /**
     * 编程时把对应的中文转为英文
     *
     */
    public function code($text,$type='_'){
    	$en_text=$this->translate($text);
    	return str_replace(' ',$type,strtolower($en_text));
    }
}
/**
 * 语言简写对应表
'auto'=>'检测语言',
'sq'=>'阿尔巴尼亚语',
'ar'=>'阿拉伯语',
'az'=>'阿塞拜疆语 ALPHA',
'ga'=>'爱尔兰语',
'et'=>'爱沙尼亚语',
'be'=>'白俄罗斯语',
'bg'=>'保加利亚语',
'is'=>'冰岛语',
'pl'=>'波兰语',
'fa'=>'波斯语',
'af'=>'布尔文(南非荷兰语)',
'da'=>'丹麦语',
'de'=>'德语',
'ru'=>'俄语',
'fr'=>'法语',
'tl'=>'菲律宾语',
'fi'=>'芬兰语',
'ka'=>'格鲁吉亚语 ALPHA',
'ht'=>'海地克里奥尔语 ALPHA',
'ko'=>'韩语',
'nl'=>'荷兰语',
'gl'=>'加利西亚语',
'ca'=>'加泰罗尼亚语',
'cs'=>'捷克语',
'hr'=>'克罗地亚语',
'lv'=>'拉脱维亚语',
'lt'=>'立陶宛语',
'ro'=>'罗马尼亚语',
'mt'=>'马耳他语',
'ms'=>'马来语',
'mk'=>'马其顿语',
'no'=>'挪威语',
'pt'=>'葡萄牙语',
'ja'=>'日语',
'sv'=>'瑞典语',
'sr'=>'塞尔维亚语',
'sk'=>'斯洛伐克语',
'sl'=>'斯洛文尼亚语',
'sw'=>'斯瓦希里语',
'th'=>'泰语',
'tr'=>'土耳其语',
'cy'=>'威尔士语',
'uk'=>'乌克兰语',
'eu'=>'西班牙的巴斯克语 ALPHA',
'es'=>'西班牙语',
'iw'=>'希伯来语',
'el'=>'希腊语',
'hu'=>'匈牙利语',
'hy'=>'亚美尼亚语 ALPHA',
'it'=>'意大利语',
'yi'=>'意第绪语',
'hi'=>'印地语',
'ur'=>'印度乌尔都语 ALPHA',
'id'=>'印尼语',
'en'=>'英语',
'vi'=>'越南语',
'zh-TW'=>'中文(繁体)',
'zh-CN'=>'中文(简体)',
 */

?>