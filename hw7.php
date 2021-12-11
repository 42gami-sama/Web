<!--1. Создать форму + отправка её на сервер + вывод результата, получить на сервере значение
	2. Fetch - отправить на сервер какие-то данные, получить результат
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Forms</title>
    <style>

    	:root {
    		background-color: pink;
    	}

    	.header {
    		background-color: hotpink;
	    	color: #fff;
	    	padding: 3px 6px;
    	}
        
    	legend {
	    	background-color: hotpink;
	   		color: #fff;
	    	padding: 3px 6px;
		};

		img {
         	border: 0.7cm solid red;
        }

	</style>
    </head>
<body>
	<form method="POST"> <!-- так как нет атрибута action ответ будет кидаться на эту же страничку-->
		<h1 class="header">BentoBox Constructor</h1>
		<p><b>Note</b>: the fields with the symbol <abbr title="Required Field">&#127857;</abbr> must be filled.</p>
		<section>
			<h2>Create your BentoBox</h2>
			   <fieldset>
			      <legend>BentoBox Animal</legend>
			      <ul>
			          <li>
			            <label for="animal_1">
			              <input type="radio" id="animal_1" name="box" value="Nyan Cat" >
			              Nyan Cat
			            </label>
			          </li>
			          <li>
			            <label for="animal_2">
			              <input type="radio" id="animal_2" name="box" value="Elegant Butterfly">
			              Elegant Butterfly
			            </label>
			          </li>
			          <li>
			            <label for="animal_3">
			              <input type="radio" id="animal_3" name="box" value="Cool Dragon">
			              Cool Dragon
			            </label>
			          </li>
			      </ul>
			    </fieldset>
			    <fieldset>
			      <legend>Choose the ingredients</legend>
			      <p>
			      <label for="salad">
			        <span>What will be your salad?</span>
			        <abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <select id="salad" name="customer_salad">
			        <option value="5 Vegetables">5 Vegetables</option>
			        <option value="Carrot Salad">Carrot Salad</option>
			        <option value="Seaweed Salad">Seaweed Salad</option>
			      </select>
			      </p>
			      <p>
			      <label for="main">
			        <span>Choose the main course:</span>
			        <abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <select id="main" name="customer_main">
			        <option value="Chicken Curry">Chicken Curry</option>
			        <option value="Omuraisu">Omuraisu</option>
			        <option value="Octopus Sausages">Octopus Sausages</option>
			      </select>
			      </p>
			      <p>
			      <label for="side">
			        <span>And now what about the side dish:</span>
			        <abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <select id="side" name="customer_side">
			        <option value="Takoyaki">Takoyaki</option>
			        <option value="Taiyaki">Taiyaki</option>
			        <option value="Onigiri">Onigiri</option>
			      </select>
			      </p>
			   	  <p>
			   	  <label for="add">
			      	<span>Now choose a gift for your bento: </span>
			      	<abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <select id="add" name="gift">
			        <option value="Ichigo Mochi">Ichigo Mochi</option>
			        <option value="Melon Ice-Cream">Melon Ice-Cream</option>
			        <option value="Matcha Roulette">Matcha Roulette</option>
			      </select>Sushi
   				  </label></p>
			    </fieldset>
			</section>
			<section>
			<h2>Contact information</h2>
			    <p>
			      <label for="name">
			        <span>Name:</span>
			        <abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <input type="text" id="name" name="user_name">
			    </p>
			    <p>
			      <label for="email">
			        <span>E-mail: </span>
			        <abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <input type="mail" id="email" name="user_email">
			    </p>
			    <p>
			      <label for="code_sms">
			        <span>SMS-code: </span>
			        <abbr title="Required Field">&#127857;</abbr>
			      </label>
			      <input type="password" id="code_sms" name="code">
			    </p>

			    <p>
				<label for="number">
			        <span>Telephone:</span>
			        <abbr title="Required Field">&#127857;</abbr>
			    </label>
			      	<input type="tel" id="number" name="user_tel">
			    </p>
			    <div>
			    <label for="comment"><b>Do you have some other important information for us?</b></label>
			    	<textarea id="comment" name="comment" cols="70" rows="8"></textarea>
				</div>
			</section>
			<button style = "color: #fff; background-color: hotpink; border-color: pink;" type="submit">Send my order!</button>
				</form>

				<section>
				<p> </p>
				<fieldset>
			    <legend>Your order</legend>
					<p> Dear <?php echo $_POST["user_name"]; ?>,<br>
						Your BentoBox has been accepted and will be packed soon!<br>
						It will arrive in <?php echo $_POST["box"]; ?> style and will include <?php echo $_POST["customer_salad"]; ?>, <?php echo $_POST["customer_main"]; ?> and <?php echo $_POST["customer_side"]; ?>.<br>
						You have also ordered: <?php echo $_POST["gift"]
						?> as a gift!<br>
	   				  	Thank you!
					</p>
				</fieldset>
  				</section>

  				<section>
  					<p></p>
  				<fieldset>
  					<legend>Meals Description</legend>
  					<h3>Read about our meals!</h3>
  					<form>
      					<label for="meal-option"><b>Choose your meal</b></label>
      					<select id="meal-option" name="meals" onchange= "Onchange()">
					        <option value="meal1">Ichigo Mochi</option>
					        <option value="meal2">Takoyaki</option>
					        <option value="meal3">Omuraisu</option>
					        <option value="meal4">Taiyaki</option>
					      </select>

    			<pre id="describe">

    			</pre>
    			</fieldset>
  				</form>
					</section>

					<p></p>

					<form id="f">

						<section>
					
						<fieldset>
						<legend>What was your favourite meal?</legend>
					  <input type="text" name="full"> Full Name
					  <input type="text" name="fav">  Meal
					  <p></p>
					  <input type="submit" value="Submit">
					  </fieldset>
				
						</section>

					</form>

				<section>
				<p> </p>
				<fieldset>
			    <legend>Your order</legend>
					<p> Dear <?php echo $_POST["full"];?>,<br>
						Your favourite meal is <?php echo $_POST["fav"]; ?>!<br>
						Thank you for answering!
					</p>
				</fieldset>
  				</section>

    <script>

    	//Получение данных с сервера с помощью fetch

    		let mealOption = document.getElementById("meal-option");
      	
      	//console.log(mealOption.value); проверка

      	function Onchange() {
        	let meal = mealOption.value;
        	updateOption(meal);
      };

      	function updateOption(meal) {
        	
        	let myURL = meal + ".txt"; //создаем ссылку

	        fetch(myURL, {
	        	method: "POST",
	         //отправляем запрос на сервер по ссылке
	        })
	        .then(response => {
	          return response.text(); //возвращаем ответ в виде текста
	        })
	        .then(text => {
	            document.getElementById("describe").textContent = text; //кладем текст в <pre>
	        })
	        .catch(e => {
  						console.log("Problem with the fetch operation: " + e.message);
					});
	        
	      };

      updateOption("meal1");
      mealOption.value = "meal1";


      //Отправка данных на сервера с помощью fetch

      let url = "hw7.php";

      let form = document.getElementById("f");
     

			form.onsubmit = (event) => {

				event.preventDefault();
				let formattedData = new FormData(form);
				postData(formattedData);

				function postData(formattedData){

	      fetch(url, {
	    		method: "POST",
	    		body: formattedData
				})
				.then(response => {
	    	return response.text();
				})
				.then(text => {
					console.log(text);
				});
			};
		};
	    	
    </script>
 
		
</body>

</html>