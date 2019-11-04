<!DOCTYPE html>
<html>
@if (Session::get('logovan') == 0)
        <script>
            window.location.replace("/admin");
        </script>
@endif
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <link rel="stylesheet" href="/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="/js/jquery.imagemapster.js"></script>
	<!--  -->
	<script type="text/javascript">
		$(document).ready(function(){	
			$('img').mapster({
				mapKey: 'zub'
			});
			$('.zz').on('click', function(){
				
				$.post('/upis-zuba', { zub: $(this).data('id'), 
									   pom: $(this).data('pacijent_id')
									 }, 
					function (response){
						location.reload(true);
					})
			});
		});
	</script>
</head>
<body>	
	@if(!empty($id))
		<input type="hidden" name="pom" data-pacijent_id="{{ $id }}">
	@endif
	<img src="/images/Raspored_ljudskih_zuba.png" style="width: 300px;" usemap="#vilice" >
	<map id="raspored_zuba" name="vilice">

	    <!-- 11 -->
	    <area shape="poly" class="zz" data-id="11" zub="11" data-pacijent_id="{{ $id }}" coords="174,59, 186,35, 189,15, 169,10 ,146,19, 150,32, 169,58, 174,61" href="#">
	    <area shape="poly" class="zz" data-id="12" zub="12" data-pacijent_id="{{ $id }}" coords="149,70, 152,39, 146,26, 140,21, 131,21, 123,26, 112,37, 114,47, 130,57, 149,70" href="#">
	    <area shape="poly" class="zz" data-id="13" zub="13" coords="128,59, 113,48, 105,48, 89,61, 90,74, 95,81, 104,84, 114,84, 125,91, 134,86, 135,74, 129,69, 130,60" href="#">
	    <area shape="poly" class="zz" data-id="14" zub="14" data-pacijent_id="{{ $id }}" coords="93,81, 83,81, 74,87, 64,105, 68,112, 86,122, 98,124, 106,122, 113,115, 115,106, 96,82" href="#">
	    <area shape="poly" class="zz" data-id="15" zub="15" data-pacijent_id="{{ $id }}" coords="93,126, 82,123, 73,119, 67,113, 53,125, 53,145, 66,155, 82,162, 89,162, 101,149, 103,138" href="#">
	    <area shape="poly" class="zz" data-id="16" zub="16" data-pacijent_id="{{ $id }}" coords="85,164, 77,163, 55,150, 40,158, 39,186, 52,205, 61,206, 70,210, 79,205, 89,184, 89,170" href="#">
	    <area shape="poly" class="zz" data-id="17" zub="17" data-pacijent_id="{{ $id }}" coords="77,215, 61,208, 49,205, 40,203, 26,222, 41,245, 47,248, 69,246, 77,236, 77,227" href="#">
	    <area shape="poly" class="zz" data-id="18" zub="18" data-pacijent_id="{{ $id }}" coords="63,250, 45,250, 37,246, 24,257, 23,272, 33,282, 47,285, 61,283, 69,274, 71,259, 64,250" href="#">
	    

	    <!-- 21 -->
	    <area shape="poly" class="zz" data-id="21" zub="21" coords="190,18, 190,36, 204,65, 223,42, 230,28, 230,21, 218,16, 214,15" href="#">
	    <area shape="poly" class="zz" data-id="22" zub="22" coords="226,42, 225,67, 230,71, 238,73, 248,63, 252,62, 262,48, 263,39, 239,26, 232,29" href="#">
	    <area shape="poly" class="zz" data-id="23" zub="23" coords="265,49, 256,60, 247,79, 243,89, 248,96, 261,99, 272,95, 279,88, 288,70, 285,60, 272,47" href="#">
	    <area shape="poly" class="zz" data-id="24" zub="24" coords="303,119, 308,111, 313,95, 307,89, 293,82, 285,84, 268,102, 262,114, 268,121, 279,125, 290,125" href="#">
	    <area shape="poly" class="zz" data-id="25" zub="25" coords="307,119, 277,137, 276,152, 283,160, 295,160, 307,159, 322,149, 322,130, 310,119" href="#">
	    <area shape="poly" class="zz" data-id="26" zub="26" coords="293,165, 286,172, 287,193, 304,213, 327,200, 334,190, 335,174, 321,158, 308,163" href="#">
	    <area shape="poly" class="zz" data-id="27" zub="27" coords="327,204, 306,215, 296,227, 296,242, 305,249, 313,252, 324,252, 340,230, 342,217, 335,206" href="#">
	    <area shape="poly" class="zz" data-id="28" zub="28" coords="316,291, 326,287, 342,270, 343,259, 334,252, 324,254, 308,254, 300,257, 300,270, 315,290" href="#">


	    <!-- 31 -->
	    <area shape="poly" class="zz" data-id="31" zub="31" coords="189,590, 189,565, 196,551, 201,550, 207,564, 211,590, 203,597" href="#">
	    <area shape="poly" class="zz" data-id="32" zub="32" coords="215,591, 210,558, 218,547, 225,549, 245,579, 233,590" href="#">
	    <area shape="poly" class="zz" data-id="33" zub="33" coords="230,551, 248,576, 251,582, 268,566, 266,554, 240,540, 234,540, 231,544" href="#">
	    <area shape="poly" class="zz" data-id="34" zub="34" coords="252,542, 266,547, 269,555, 284,541, 284,533, 274,520, 265,518, 252,529, 250,540" href="#">
	    <area shape="poly" class="zz" data-id="35" zub="35" coords="268,515, 276,516, 285,529, 302,515, 295,496, 275,485, 262,502, 263,510" href="#">
	    <area shape="poly" class="zz" data-id="36" zub="36" coords="275,480, 295,492, 311,496, 330,464, 314,447, 291,438, 285,440, 279,453, 279,462, 273,468" href="#">
	    <area shape="poly" class="zz" data-id="37" zub="37" coords="309,442, 332,443, 335,396, 319,393, 306,390, 296,396, 295,415, 291,418, 293,435, 306,440" href="#">
	    <area shape="poly" class="zz" data-id="38" zub="38" coords="312,387, 325,389, 335,389, 344,377, 347,366, 329,342, 318,343, 304,351, 294,365, 295,374, 308,386" href="#">


	    <!-- 41 -->
	    <area shape="poly" class="zz" zub="41" data-id="41" coords="182,549, 185,592, 162,589, 165,576, 169,565, 180,548" href="#">
	    <area shape="poly" class="zz" zub="42" data-id="42" coords="159,586, 161,577, 164,569, 162,560, 161,545, 153,545, 142,571, 143,584, 147,586" href="#">
	    <area shape="poly" class="zz" zub="43" data-id="43" coords="136,578, 145,557, 145,539, 141,533, 117,558, 117,569, 123,577, 128,579" href="#">
	    <area shape="poly" class="zz" zub="44" data-id="44" coords="107,561, 114,558, 125,544, 127,528, 123,521, 110,521, 101,527, 91,543, 93,549, 105,560" href="#">
	    <area shape="poly" class="zz" zub="45" data-id="45" coords="103,522, 111,513, 111,500, 102,486, 95,486, 88,491, 83,495, 77,496, 72,503, 73,516, 85,527, 90,528, 98,527" href="#">
	    <area shape="poly" class="zz" zub="46" data-id="46" coords="72,494, 87,490, 95,479, 100,452, 89,434, 74,433, 63,438, 53,442, 44,463, 45,470, 57,489, 75,494" href="#">
	    <area shape="poly" class="zz" zub="47" data-id="47" coords="51,440, 65,434, 72,432, 83,420, 82,412, 68,388, 42,391, 30,414, 34,424" href="#">
	    <area shape="poly" class="zz" zub="48" data-id="48" coords="25,347, 25,377, 27,380, 42,387, 57,385, 64,378, 67,371, 68,353, 60,340, 47,340,33,342" href="#">
    </map>

</body>
</html>