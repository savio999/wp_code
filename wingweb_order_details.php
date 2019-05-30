<?php
$str = '[{"lang":1,"loggedvisit":1,"loggedwingweb":1,"loggedwingwebfrom":"https://www.google.nl/","loggedbrowser":"Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1 Mobile/15E148 Safari/604.1","ip":"62.72.192.109","start":1558542318,"customer":{"product":{"720":[{"amount":"1","color":null}],"721":[{"amount":"1","color":null}],"733":[{"amount":"2","color":null}],"730":[{"amount":"1","color":null}],"731":[{"amount":"1","color":null}],"732":[{"amount":"1","color":null}],"1555":{"1":{"amount":"25","color":null}},"736":[{"amount":"4","color":null}]},"finishSteps":0},"totaalExBTW":229.08,"error":{"":1},"formSucces":true,"customerKey":{"pKosten":"","addporto":"0","a":"Arno liekstra","b":"Schultenweg 44","c":"9761 CK","d":"Eelde","shipping-b":"","shipping-c":"","shipping-d":"","e":"0629211769","f":"a.liekstra@gmail.com","g":"","h":"2","shippingType":"Doos","i":"1","shipping":{"porto":1500}},"ideal":{"totalPrice":289.793064},"orderId":773,"setOrder":1}]';

$order_details = json_decode($str, true);
echo "<pre>";
print_r($order_details);
