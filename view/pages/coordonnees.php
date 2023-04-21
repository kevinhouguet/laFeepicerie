<h1>Mes coordonnées</h1>
<form>
	<table>
		<tr>
			<td class="label"><label>Date de naissance : </label></td>
			<?php
			echo "<td><SELECT name='jour' size='1'>";
			echo "<option>Jour</option>";
			for( $i=1; $i<= 31; $i++){
				echo "<option>".$i."</option>";
			}
				echo"</SELECT>";
			?>
			<SELECT name='mois' size='1'>
			<option>Mois</option>
			<option>Janvier</option>
			<option>Février</option>
			<option>Mars</option>
			<option>Avril</option>
			<option>Mai</option>
			<option>Juin</option>
			<option>Juillet</option>
			<option>Août</option>
			<option>Septembre</option>
			<option>Octobre</option>
			<option>Novembre</option>
			<option>Décembre</option>
			</select>
			<?php
			echo "<SELECT name='année' size='1'>";
			echo "<option>Ann&eacutee</option>";
			for( $i=1914; $i<= 2014; $i++){
				echo "<option>".$i."</option>";
			}
				echo"</SELECT>";
			?>
			</td>
		</tr>		
		<tr>
			<td class="label"><label>Numéro de téléphone portable : </label></td>
			<td><input type="num" name="tel" /></td>
		</tr>
		<tr>
			<td class="label"><label>Numéro de téléphone fixe : </label></td>
			<td><input type="num" name="tel" /></td>
		</tr>
		<tr>
			<td class="label"><label>Adresse : </label></td>
			<td><textarea type="addresse" name="addr"></textarea></td>
		</tr>
		<tr>
			<td class="label"><label>Code postal : </label></td>
			<td><input type="code_postal" name="CP" /></td>
		</tr>
		<tr>
			<td class="label"><label>Ville : </label></td>
			<td><input type="text-long" name="ville" /></td>
		</tr>
	</table> <br>
	<input type="submit" value="Envoyer" />
</form>
