<html>
<head>
  <link rel="stylesheet" type="text/css" href="http://localhost:8000/form.css"></link>
</head>

<body>
<hgroup>
  <h1>Product Search</h1>
  <h3></h3>
</hgroup>
<form>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>What are you looking for?</label>
  </div>
  <div class="group">

    <select name="make">
      <option value="volvo">Volvo</option>
      <option value="saab">Saab</option>
      <option value="fiat">Fiat</option>
      <option value="audi">Audi</option>
    </select>

    <select name="color">
  <option value="white">white</option>
  <option value="yellow">yellow</option>
  <option value="blue">blue</option>
  <option value="red">red</option>
</select>

  </div>
  <button type="button" class="button buttonBlue">Find your product
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
<footer>
</footer>
</body>
</html>
