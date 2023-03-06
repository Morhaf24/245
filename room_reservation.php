<?php $page_title = "Raum ★ Reservation"; ?>
<?php require "view/blocks/page_start.php"; ?>
<h1 id="title">Raum Reservation </h1>
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
                            <option value="choose">Raum auswählen</option>
                            <option value="Rubin">Rubin</option>
                            <option value="Smaragd">Smaragd</option>
                            <option value="Opal">Opal</option>
                            <option value="Oxford">Oxford</option>
                            <option value="Boston">Boston</option>
                            <option value="Harvard">Harvard</option>
                            <option value="Sorbonne">Sorbonne</option>
                            <option value="Cambridge">Cambridge</option>
                            <option value="San Diego">San Diego</option>
                            <option value="Eiger">Eiger</option>
                            <option value="blueemlisalp">Blüemlisalp</option>
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
