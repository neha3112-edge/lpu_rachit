	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/x-icon" href="assets/img/lpu-fav.png">	
		<link rel="stylesheet" type="text/css" href="assets/css/style4.css">
		<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
 <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
 
 <meta name="google-site-verification" content="iGfDSJm9-A4GqCrMXKsmjg7miK_mJgfalkhLAHs_goM" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MCBPJBRTCV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MCBPJBRTCV');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQVQ267D');</script>
<!-- End Google Tag Manager -->

		<script type="text/javascript">
     document.addEventListener("DOMContentLoaded", function() {
        // Function to get the value of a URL parameter
        function getQueryParam(param) {
            var searchParams = new URLSearchParams(window.location.search);
            return searchParams.get(param) || ''; // Return an empty string if the parameter is not found
        }

        // Get all forms on the page
        var forms = document.querySelectorAll('form');

        // Loop through each form to set the values
        forms.forEach(function(form) {
            form.querySelector('#sub_source').value = getQueryParam('sub_source');
            form.querySelector('#utm_source').value = getQueryParam('utm_source');
            form.querySelector('#utm_campaign').value = getQueryParam('utm_campaign');
            form.querySelector('#utm_medium').value = getQueryParam('utm_medium');
            form.querySelector('#utm_term').value = getQueryParam('utm_term');

            // Get the current URL
            const currentURL = window.location.href;


            // Set the extracted URL to the input field
            form.querySelector('#page_url').value = currentURL;
        });
    });

</script>
		<script src="https://kit.fontawesome.com/2e53935cd9.js" crossorigin="anonymous"></script>
			
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
  

<script>
(function () {
    const params = new URLSearchParams(window.location.search);

    const utmFields = [
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term'
    ];

    utmFields.forEach(function (field) {
        const value = params.get(field);
        if (value) {
            const input = document.getElementById(field);
            if (input) {
                input.value = value;
            }
        }
    });

    // Auto source mapping
    const utmSource = params.get('utm_source');
    if (utmSource) {
        const sourceInput = document.getElementById('source');
        if (sourceInput) {
            sourceInput.value = utmSource;
        }
    }

    // Page URL
    const pageUrlInput = document.getElementById('page_url');
    if (pageUrlInput) {
        pageUrlInput.value = window.location.href;
    }
})();
</script>