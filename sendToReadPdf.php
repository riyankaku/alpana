<html>
    <head>
        <style>
            
            .inline {
  display: inline;
}

.link-button {
  background: none;
  border: none;
  color: blue;
  text-decoration: underline;
  cursor: pointer;
  font-size: 1em;
  font-family: serif;
}
.link-button:focus {
  outline: none;
}
.link-button:active {
  color:red;
}

            
        </style>
    </head>
    
    <body>
<a href="some_page">This is a regular link</a>

<form method="post" action="readpdf.php" class="inline">
  <input type="hidden" name="extra_submit_param" value="samplepdf.pdf">
  <button type="submit" name="submit_param" value="submit_value" class="link-button">
    This is a link that sends a POST request
  </button>
</form>        
    </body>
    
</html>