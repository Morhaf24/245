<?php $page_title = "Raum ★ Reservation"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1 id="title">Parkplatz Reservation </h1>
<div>
<table class="label">
                <tr>
                    <td>
                        <label style="color:black"; class="reservationsite">Raum-Name:</label>
                        <br>
                        <label style="color:black"; class="reservationsite">Reserviert für: </label>
                        <br>
                        <label style="color:black;" class="reservationsite">Reserviert von:</label>
                        <br>
                        <label style="color:black;" class="reservationsite">Reserviert bis:</label>        
                    </td>
                </tr>
            </table>
            <table class="input">
                <tr>
                    <td class="input">
                        <select name="room-name" id="room_name">
                            <option value="choose">Parkplatz auswählen</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                        <br>
                        <input type="text" class="reservationsite" placeholder="Hanz Hofer">
                        <br>
                        <input type="date" class="reservationsite">
                        <input type="time" class="reservationsite">
                        <br>
                        <input type="date" class="reservationsite">
                        <input type="time" class="reservationsite">

                    </td>
                </tr>
            </table>
            <br>
			<button type="submit" class="reservation" id="reservation-button">Reservieren</button>
</div>

<?php require "view/blocks/page_end.php"; ?>
