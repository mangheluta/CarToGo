
<div class="modal fade" id="van" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Rent a van</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body center">
        <form class="van" action="invoice.php" method="POST">
          <input type="text" name="class" value="Van" readonly>
          <input type="text" name="name" placeholder="name">
          <input type="text" name="telephone" placeholder="telephone">
          <select name="carType" id="carType">
            <option value="0" selected="selected">Select a van</option>
            <option value="Mercedes Vito">Mercedes Vito</option>
            <option value="VW Transporter">VW Transporter</option>
            <option value="Ford Transit">Ford Transit</option>
          </select>
          <p>From:</p>
          <input type="date" name="startDay"><br><br>
          <p>To:</p>
          <input type="date" name="endDay"><br><br>
          <input type="email" name="email" class="inp" placeholder="Enter Your Email" required><br><br>
          <input type="submit" name="submit" value="Send">
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>