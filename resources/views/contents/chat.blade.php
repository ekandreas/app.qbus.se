<!-- Chat box -->
<div class="box box-info">
  <div class="box-header">
    <i class="fa fa-comments-o"></i>

    <h3 class="box-title">Diskussion</h3>

    <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
      <div class="btn-group" data-toggle="btn-toggle">
        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
        </button>
        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
      </div>
    </div>
  </div>
  <div class="box-body chat" id="chat-box">
    <!-- chat item -->
    <div class="item">
      <img src="{{ asset('assets/images/noname1.jpg') }}" alt="user image" class="online">

      <p class="message">
        <a href="#" class="name">
          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 15:00</small>
          Anna Eriksson
        </a>
        Är det någon som kommer ihåg hur man skapade nya checklistor för leveransprojekten?<br/>Tänker att det är fokus på det nu i mars månad... Hilfe!
      </p>
    </div>
    <!-- /.item -->
    <!-- chat item -->
    <div class="item">
      <img src="{{ asset('assets/images/noname2.jpg') }}" alt="user image" class="offline">

      <p class="message">
        <a href="#" class="name">
          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 14:20</small>
          Erik Gustafsson
        </a>
        Oj! Det här var ju toppen att få indexkurva på hur vi förbättras som team i våra processer. Hade ingen aning om att det fanns ens. Finns det andra bra tips här för att driva detta framåt?
      </p>
    </div>
    <!-- /.item -->
    <!-- chat item -->
    <div class="item">
      <img src="{{ asset('assets/images/noname3.jpg') }}" alt="user image" class="offline">
      <p class="message">
        <a href="#" class="name">
          <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 13:00</small>
          Samir Riiva
        </a>
        Jag skulle behöva lite mer input kring vår dokumentation om medarbetarsamtalen. Vad är det vi vill ha med som inte finns idag? Jag tar gärna mot tips och idéer kring vad vi ska komplettera. Kolla gärna hur det ser ut nu!
      </p>

    </div>
    <!-- /.item -->
  </div>
  <!-- /.chat -->
  <div class="box-footer">
    <div class="input-group">
      <input class="form-control" placeholder="Skriv ett meddelande...">

      <div class="input-group-btn">
        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- /.box (chat box) -->
