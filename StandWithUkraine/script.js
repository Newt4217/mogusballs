function show(currency) {
	if (document.getElementById(currency).style.display === "inline") {
			document.getElementById(currency)
				.style.display = "none";	
		}	else	{
				document.getElementById(currency)
					.style.display = "inline";
			}
}

function show_with_tag_xrp() {
	show('xrp');
	show('xrptag')
}

function show_with_tag_bnb() {
	show('bnb');
	show('bnbtag')
}