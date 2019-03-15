<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title>Démonstration jQuery MultiSelect</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

		<script src="jquery.js" type="text/javascript"></script>
		<script src="jquery.dimensions.js" type="text/javascript"></script>
		<script src="jqueryMultiSelect.js" type="text/javascript"></script>

		<link href="jqueryMultiSelect.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript">

			$(document).ready( function() {

				// Default options
				$("#control_1, #control_3, #control_4, #control_5").multiSelect();

				// With callback

  $(document).ready( function() {
      $("#control_1").multiSelect({
        selectAll: false,
        noneSelected: 'Sélectionnez des éléments!',
        oneOrMoreSelected: '% options sélectionnées'
      });
  });


				// Show test data
				$("FORM").submit( function() {
					var results = $(this).serialize().replace(/&/g, '\n');
					results = decodeURI(results);
					alert(results);
					return false;
				});

			});

		</script>

		<style type="text/css">
			HTML {
				font-family: Arial, Helvetica, sans-serif;
				font-size: 12px;
			}

			H2 {
				font-size: 14px;
				font-weight: bold;
				margin: 1em 0em .25em 0em;
			}

			P {
				margin: 1em 0em;
			}
		</style>
	</head>

	<body>

		<form action="" method="post">

			<h1>jQuery MultiSelect</h1>

			<p>
				N'hésitez pas à regarder le code source de cette page pour voir comment l'objet MultiSelect est utilisé.
			</p>

			<p>
				<strong>Astuce: </strong> essayez de naviguer dans le menu en utilisant le clavier : bas, up, tab, entrée, espace, échap.
			</p>

			<p>
				<a href="http://abeautifulsite.net/notebook.php?article=62">Retourner à la page officielle du projet</a>

			</p>

			<h2>Objet 1: Options par défaut</h2>
			<p>
				<select id="control_1" name="control_1[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1">Option 1</option>
					<option value="option_2">Option 2</option>

					<option value="option_3">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>
				</select>
			</p>

			<h2>Objet 2: test du bug d'affichage de IE6 <span style="color: #C00;">(Echec)</span></h2>

			<p>
        <select name="toto" id="toto" type="select" multiple size="2">

<option value="">Tous</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option>

</select>
			</p>

			<h2>Objets 3, 4, 5: Options pré-sélectionnées</h2>
			<p>
				<select id="control_3" name="control_3[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1" selected="selected">Option 1</option>
					<option value="option_2">Option 2</option>

					<option value="option_3">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>
					<option value="option_6">Option 6</option>
					<option value="option_7">Option 7</option>
				</select>


				<select id="control_4" name="control_4[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1" selected="selected">Option 1</option>
					<option value="option_2" selected="selected">Option 2</option>
					<option value="option_3">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>

					<option value="option_6">Option 6</option>
					<option value="option_7">Option 7</option>
				</select>

				<select id="control_5" name="control_5[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1" selected="selected">Option 1</option>
					<option value="option_2" selected="selected">Option 2</option>

					<option value="option_3" selected="selected">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>
					<option value="option_6">Option 6</option>
					<option value="option_7">Option 7</option>
				</select>

			</p>

			<h2>Objet 6: avec un callback</h2>
			<p>
				<span id="callbackResult" style="display: none;">Callback appelé!</span><br />
				<select id="control_6" name="control_6[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1">Option 1</option>

					<option value="option_2">Option 2</option>
					<option value="option_3">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>
					<option value="option_6">Option 6</option>
					<option value="option_7">Option 7</option>

				</select>
			</p>

			<h2>Objet 7: Options affichée dans une liste séparée par des virgules</h2>
			<p>
				<select id="control_7" name="control_7[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1">Option 1</option>
					<option value="option_2">Option 2</option>

					<option value="option_3">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>
					<option value="option_6">Option 6</option>
					<option value="option_7">Option 7</option>
				</select>

			</p>

			<h2>Objet 8: texte &ldquo;Select All&rdquo; modifié</h2>
			<p>
				<select id="control_8" name="control_8[]" multiple="multiple" size="5">
					<option value=""></option>
					<option value="option_1">Option 1</option>
					<option value="option_2">Option 2</option>

					<option value="option_3">Option 3</option>
					<option value="option_4">Option 4</option>
					<option value="option_5">Option 5</option>
					<option value="option_6">Option 6</option>
					<option value="option_7">Option 7</option>
				</select>

			</p>

			<p>
				<input type="submit" value="Voir le résultat" />
			</p>

		</form>

	</body>
</html>
