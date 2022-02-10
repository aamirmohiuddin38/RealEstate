  <!-- alert message -->

  <!-- content START -->
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.css">


  <div class="row">
    <!-- Save -->
    <div class="col-sm-12">
      <form role="form" action="<?php echo base_url('index.php/'); ?>admin/property/create" method="post" id="save_property_form">

        <!-- property_title, content, Property type, status, label -->
        <!-- dropzonejs -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/dropzone/min/dropzone.min.css">
        <!-- property_title, content, Property type, status, label -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title"><i class="fa fa-plus"></i> Add Property</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">


            <!-- property_title, content, Property type, status, label -->
            <div class="row">
              <div class="col-md-12">

                <input type="hidden" name="unique_id" value="PFG3OU9E">

                <!-- property_title -->
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="property_title">Property Title</label> <small class="req text-danger"> *</small>
                      <input name="property_title" class="form-control " type="text" placeholder="Property Title" id="property_title" value="">
                    </div>
                  </div>
                </div>

                <!-- content -->
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Content</label>
                      <textarea id="summernote" name="content" class="form-control summernote" rows="6" placeholder="Content" style="display: none;"></textarea>
                      <div class="note-editor note-frame card">
                        <div class="note-dropzone">
                          <div class="note-dropzone-message"></div>
                        </div>
                        <div class="note-toolbar card-header" role="toolbar">
                          <div class="note-btn-group btn-group note-style">
                            <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style"><i class="note-icon-magic"></i></button>
                              <div class="note-dropdown-menu dropdown-menu dropdown-style" role="list" aria-label="Style"><a class="dropdown-item" href="#" data-value="p" role="listitem" aria-label="p">
                                  <p>Normal</p>
                                </a><a class="dropdown-item" href="#" data-value="blockquote" role="listitem" aria-label="blockquote">
                                  <blockquote class="blockquote">Blockquote</blockquote>
                                </a><a class="dropdown-item" href="#" data-value="pre" role="listitem" aria-label="pre">
                                  <pre>Code</pre>
                                </a><a class="dropdown-item" href="#" data-value="h1" role="listitem" aria-label="h1">
                                  <h1>Header 1</h1>
                                </a><a class="dropdown-item" href="#" data-value="h2" role="listitem" aria-label="h2">
                                  <h2>Header 2</h2>
                                </a><a class="dropdown-item" href="#" data-value="h3" role="listitem" aria-label="h3">
                                  <h3>Header 3</h3>
                                </a><a class="dropdown-item" href="#" data-value="h4" role="listitem" aria-label="h4">
                                  <h4>Header 4</h4>
                                </a><a class="dropdown-item" href="#" data-value="h5" role="listitem" aria-label="h5">
                                  <h5>Header 5</h5>
                                </a><a class="dropdown-item" href="#" data-value="h6" role="listitem" aria-label="h6">
                                  <h6>Header 6</h6>
                                </a></div>
                            </div>
                          </div>
                          <div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                          <div class="note-btn-group btn-group note-fontname">
                            <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-original-title="Font Family"><span class="note-current-fontname" style="font-family: &quot;Source Sans Pro&quot;;">Source Sans Pro</span></button>
                              <div class="note-dropdown-menu dropdown-menu note-check dropdown-fontname" role="list" aria-label="Font Family"><a class="dropdown-item" href="#" data-value="Arial" role="listitem" aria-label="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a><a class="dropdown-item" href="#" data-value="Arial Black" role="listitem" aria-label="Arial Black"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial Black'">Arial Black</span></a><a class="dropdown-item" href="#" data-value="Comic Sans MS" role="listitem" aria-label="Comic Sans MS"><i class="note-icon-menu-check"></i> <span style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a><a class="dropdown-item" href="#" data-value="Courier New" role="listitem" aria-label="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a><a class="dropdown-item" href="#" data-value="Helvetica" role="listitem" aria-label="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a><a class="dropdown-item" href="#" data-value="Impact" role="listitem" aria-label="Impact"><i class="note-icon-menu-check"></i> <span style="font-family: 'Impact'">Impact</span></a><a class="dropdown-item" href="#" data-value="Tahoma" role="listitem" aria-label="Tahoma"><i class="note-icon-menu-check"></i> <span style="font-family: 'Tahoma'">Tahoma</span></a><a class="dropdown-item" href="#" data-value="Times New Roman" role="listitem" aria-label="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family: 'Times New Roman'">Times New Roman</span></a><a class="dropdown-item" href="#" data-value="Verdana" role="listitem" aria-label="Verdana"><i class="note-icon-menu-check"></i> <span style="font-family: 'Verdana'">Verdana</span></a><a class="dropdown-item checked" href="#" data-value="Source Sans Pro" role="listitem" aria-label="Source Sans Pro"><i class="note-icon-menu-check"></i> <span style="font-family: 'Source Sans Pro'">Source Sans Pro</span></a><a class="dropdown-item" href="#" data-value="Segoe UI" role="listitem" aria-label="Segoe UI"><i class="note-icon-menu-check"></i> <span style="font-family: 'Segoe UI'">Segoe UI</span></a><a class="dropdown-item" href="#" data-value="Segoe UI Emoji" role="listitem" aria-label="Segoe UI Emoji"><i class="note-icon-menu-check"></i> <span style="font-family: 'Segoe UI Emoji'">Segoe UI Emoji</span></a><a class="dropdown-item" href="#" data-value="Segoe UI Symbol" role="listitem" aria-label="Segoe UI Symbol"><i class="note-icon-menu-check"></i> <span style="font-family: 'Segoe UI Symbol'">Segoe UI Symbol</span></a></div>
                            </div>
                          </div>
                          <div class="note-btn-group btn-group note-color">
                            <div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-light btn-sm note-current-color-button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00" data-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color"></button>
                              <div class="note-dropdown-menu dropdown-menu" role="list">
                                <div class="note-palette">
                                  <div class="note-palette-title">Background Color</div>
                                  <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="backColor" data-value="transparent">Transparent</button></div>
                                  <div class="note-holder" data-event="backColor">
                                    <!-- back colors -->
                                    <div class="note-color-palette">
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                    </div>
                                  </div>
                                  <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="backColorPicker">Select</button><input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette"></div>
                                  <div class="note-holder-custom" id="backColorPalette" data-event="backColor">
                                    <div class="note-color-palette">
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="note-palette">
                                  <div class="note-palette-title">Text Color</div>
                                  <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="removeFormat" data-value="foreColor">Reset to default</button></div>
                                  <div class="note-holder" data-event="foreColor">
                                    <!-- fore colors -->
                                    <div class="note-color-palette">
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                    </div>
                                  </div>
                                  <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="foreColorPicker">Select</button><input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette"></div>
                                  <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor">
                                    <div class="note-color-palette">
                                      <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                            <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph"><i class="note-icon-align-left"></i></button>
                              <div class="note-dropdown-menu dropdown-menu" role="list">
                                <div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div>
                                <div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div>
                              </div>
                            </div>
                          </div>
                          <div class="note-btn-group btn-group note-table">
                            <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-original-title="Table"><i class="note-icon-table"></i></button>
                              <div class="note-dropdown-menu dropdown-menu note-table" role="list" aria-label="Table">
                                <div class="note-dimension-picker">
                                  <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                                  <div class="note-dimension-picker-highlighted"></div>
                                  <div class="note-dimension-picker-unhighlighted"></div>
                                </div>
                                <div class="note-dimension-display">1 x 1</div>
                              </div>
                            </div>
                          </div>
                          <div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Picture" data-original-title="Picture"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Video" data-original-title="Video"><i class="note-icon-video"></i></button></div>
                          <div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-light btn-sm btn-fullscreen note-codeview-keep" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-codeview note-codeview-keep" tabindex="-1" title="" aria-label="Code View" data-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Help" data-original-title="Help"><i class="note-icon-question"></i></button></div>
                        </div>
                        <div class="note-editing-area">
                          <div class="note-handle">
                            <div class="note-control-selection">
                              <div class="note-control-selection-bg"></div>
                              <div class="note-control-holder note-control-nw"></div>
                              <div class="note-control-holder note-control-ne"></div>
                              <div class="note-control-holder note-control-sw"></div>
                              <div class="note-control-sizing note-control-se"></div>
                              <div class="note-control-selection-info"></div>
                            </div>
                          </div><textarea class="note-codable" aria-multiline="true"></textarea>
                          <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                            <p><br></p>
                          </div>
                        </div><output class="note-status-output" role="status" aria-live="polite"></output>
                        <div class="note-statusbar" role="status">
                          <div class="note-resizebar" aria-label="Resize">
                            <div class="note-icon-bar"></div>
                            <div class="note-icon-bar"></div>
                            <div class="note-icon-bar"></div>
                          </div>
                        </div>
                        <div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Insert Link</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group note-form-group"><label for="note-dialog-link-txt-16445119453241" class="note-form-label">Text to display</label><input id="note-dialog-link-txt-16445119453241" class="note-link-text form-control note-form-control note-input" type="text"></div>
                                <div class="form-group note-form-group"><label for="note-dialog-link-url-16445119453241" class="note-form-label">To what URL should this link go?</label><input id="note-dialog-link-url-16445119453241" class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                                <div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div>
                                <div class="form-check sn-checkbox-use-protocol"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="" aria-label="Use default protocol" aria-checked="true"> Use default protocol</label></div>
                              </div>
                              <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>
                            </div>
                          </div>
                        </div>
                        <div class="note-popover popover in note-link-popover bottom">
                          <div class="arrow"></div>
                          <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
                            <div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Edit" data-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Unlink" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div>
                          </div>
                        </div>
                        <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Insert Image</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group note-form-group note-group-select-from-files"><label for="note-dialog-image-file-16445119453241" class="note-form-label">Select from files</label><input id="note-dialog-image-file-16445119453241" class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                                <div class="form-group note-group-image-url"><label for="note-dialog-image-url-16445119453241" class="note-form-label">Image URL</label><input id="note-dialog-image-url-16445119453241" class="note-image-url form-control note-form-control note-input" type="text"></div>
                              </div>
                              <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>
                            </div>
                          </div>
                        </div>
                        <div class="note-popover popover in note-image-popover bottom">
                          <div class="arrow"></div>
                          <div class="popover-content note-children-container">
                            <div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize full" data-original-title="Resize full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize half" data-original-title="Resize half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize quarter" data-original-title="Resize quarter"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Original size" data-original-title="Original size"><i class="note-icon-rollback"></i></button></div>
                            <div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Float Left" data-original-title="Float Left"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Float Right" data-original-title="Float Right"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove float" data-original-title="Remove float"><i class="note-icon-rollback"></i></button></div>
                            <div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove Image" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
                          </div>
                        </div>
                        <div class="note-popover popover in note-table-popover bottom">
                          <div class="arrow"></div>
                          <div class="popover-content note-children-container">
                            <div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add row below" data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add row above" data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add column left" data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add column right" data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div>
                            <div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete row" data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete column" data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete table" data-original-title="Delete table"><i class="note-icon-trash"></i></button></div>
                          </div>
                        </div>
                        <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Insert Video</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group note-form-group row-fluid"><label for="note-dialog-video-url-16445119453241" class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input id="note-dialog-video-url-16445119453241" class="note-video-url form-control note-form-control note-input" type="text"></div>
                              </div>
                              <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>
                            </div>
                          </div>
                        </div>
                        <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Help</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                              </div>
                              <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo the last command</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo the last command</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                                <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                              </div>
                              <div class="modal-footer">
                                <p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.18</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <style>
                  .select2-container .select2-selection--single {
                    height: 38px;
                  }

                  .select2-container--default .select2-selection--single .select2-selection__arrow {
                    height: 38px;
                  }

                  .select2-container--default .select2-selection--single .select2-selection__clear {
                    display: none;
                  }
                </style>
                <!-- Featured Image -->
                <!-- <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="featured_image">File input</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input name="featured_image" type="file" class="custom-file-input" id="featured_image">
                    <label class="custom-file-label" for="featured_image">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
                <!-- Property type, status, label -->
                <div class="row">
                  <!-- type -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Type</label>
                      <select name="type" class="form-control" id="type">
                        <option value="">Select Property Type</option>
                        <option value="3">Office</option>
                        <option value="4">Shop</option>
                        <option value="5">Appartment</option>
                        <option value="6">Multi Family Home</option>
                        <option value="7">Single Family Home</option>
                        <option value="8">Studio</option>
                        <option value="9">Villa</option>
                        <option value="15">Commercial</option>
                        <option value="17">Dummy Updated</option>
                      </select>
                    </div>
                  </div>
                  <!-- Status -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control select2-hidden-accessible" id="status" data-select2-id="status" tabindex="-1" aria-hidden="true">
                        <option value="" selected="selected" data-select2-id="4">Select Property Type</option>
                        <option value="1">For Rent</option>
                        <option value="2">For Sale</option>
                        <option value="3">New Construction</option>
                        <option value="4">New Listing</option>
                        <option value="5">Open House</option>
                        <option value="6">Reduced Price</option>
                        <option value="7">Resale</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 311.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-container"><span class="select2-selection__rendered" id="select2-status-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                  </div>
                  <!-- label -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Label</label>
                      <select name="label" class="form-control select2-hidden-accessible" id="label" data-select2-id="label" tabindex="-1" aria-hidden="true">
                        <option value="" selected="selected" data-select2-id="6">Select Property Type</option>
                        <option value="1">Sold</option>
                        <option value="3">Hot Offer</option>
                      </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 311.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-label-container"><span class="select2-selection__rendered" id="select2-label-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- JQuery -->
        <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- dropzonejs -->
        <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/dropzone/min/dropzone.min.js"></script>


        <script>
          $(document).ready(function() {

            // DropzoneJS Demo Code Start
            Dropzone.autoDiscover = false

            // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
            var previewNode = document.querySelector("#template")
            previewNode.id = ""
            var previewTemplate = previewNode.parentNode.innerHTML
            previewNode.parentNode.removeChild(previewNode)

            var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
              url: "/target-url", // Set the url
              thumbnailWidth: 80,
              thumbnailHeight: 80,
              parallelUploads: 20,
              previewTemplate: previewTemplate,
              autoQueue: false, // Make sure the files aren't queued until manually added
              previewsContainer: "#previews", // Define the container to display the previews
              clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
            })

            myDropzone.on("addedfile", function(file) {
              // Hookup the start button
              file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
              }
            })

            // Update the total progress bar
            myDropzone.on("totaluploadprogress", function(progress) {
              document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
            })

            myDropzone.on("sending", function(file) {
              // Show the total progress bar when upload starts
              document.querySelector("#total-progress").style.opacity = "1"
              // And disable the start button
              file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
            })

            // Hide the total progress bar when nothing's uploading anymore
            myDropzone.on("queuecomplete", function(progress) {
              document.querySelector("#total-progress").style.opacity = "0"
            })

            // Setup the buttons for all transfers
            // The "add files" button doesn't need to be setup because the config
            // `clickable` has already been specified.
            document.querySelector("#actions .start").onclick = function() {
              myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
            }
            document.querySelector("#actions .cancel").onclick = function() {
              myDropzone.removeAllFiles(true)
            }
            // DropzoneJS Demo Code End
          });
        </script>
        <!-- Bedrooms, Bathrooms, area size -->
        <!-- Bedrooms, Bathrooms, area size -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Property Details</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <!-- bedrooms -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="bedrooms">Bedrooms</label>
                  <input name="bedrooms" class="form-control " type="text" placeholder="Bedrooms" id="bedrooms" value="">
                </div>
              </div>

              <!-- bathrooms -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="bathrooms">Bathrooms</label>
                  <input name="bathrooms" class="form-control " type="text" placeholder="Bathrooms" id="bathrooms" value="">
                </div>
              </div>

              <!-- area_size -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="area_size">Area Size</label> <small class="req text-danger"> *</small>
                  <input name="area_size" class="form-control " type="text" placeholder="Area Size" id="area_size" value="">
                </div>
              </div>

              <!-- size_postfix -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="size_postfix">Size Postfix</label> <small class="req text-danger"> *</small>
                  <input name="size_postfix" class="form-control " type="text" placeholder="Size Postfix" id="size_postfix" value="">
                </div>
              </div>
            </div>

            <!-- land area, postfix -->
            <div class="row">
              <!-- land area -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="land_area">Land Area</label> <small class="req text-danger"> *</small>
                  <input name="land_area" class="form-control " type="text" placeholder="Land Area" id="land_area" value="">
                </div>
              </div>

              <!-- land area postfix -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="land_area_postfix">Land Area Postfix</label> <small class="req text-danger"> *</small>
                  <input name="land_area_postfix" class="form-control " type="text" placeholder="Land Area Postfix" id="land_area_postfix" value="">
                </div>
              </div>

              <!-- Garages -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="garages">Garages</label>
                  <input name="garages" class="form-control " type="text" placeholder="Garages" id="garages" value="">
                </div>
              </div>

              <!-- garage_size -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="garage_size">Garage Size</label>
                  <input name="garage_size" class="form-control " type="text" placeholder="Garage Size" id="garage_size" value="">
                </div>
              </div>
            </div>

            <!-- Year Built -->
            <div class="row">
              <!-- year_built -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Year Built</label>
                  <input name="year_built" class="form-control " type="text" placeholder="Year Built" id="year_built" value="" requiredd="">
                </div>
              </div>

              <!-- price -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Price </label> <small class="req text-danger"> *</small>
                  <input name="price" class="form-control " type="text" placeholder="Price" id="price" value="" requiredd="">
                </div>
              </div>

              <!-- Facing -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label for="">Front Facing</label> <i class="req text-danger text-danger"> *</i>
                  <select name="front_facing" class="form-control select2-hidden-accessible" id="front_facing" data-select2-id="front_facing" tabindex="-1" aria-hidden="true">
                    <option value="" selected="selected" data-select2-id="8">Select facing direction</option>
                    <option value="1">East</option>
                    <option value="2">West</option>
                    <option value="3">North</option>
                    <option value="4">South</option>
                    <option value="5">South East</option>
                    <option value="6">South West</option>
                    <option value="7">North East</option>
                    <option value="8">North West</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 230.25px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-front_facing-container"><span class="select2-selection__rendered" id="select2-front_facing-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Additional Details -->
        <!-- Additional Details -->
        <div class="card ">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Additional Details</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">

            <div id="aditional_details">
              <input type="hidden" id="row_count" value="1">
              <div class="row">
                <!-- title -->
                <div class="col-sm-5">
                  <div class="form-group">
                    <label>Title</label>
                    <input name="additional[title][]" class="form-control " type="text" placeholder="Title" id="additional_title" value="" requiredd="">
                  </div>
                </div>
                <!-- value -->
                <div class="col-sm-5">
                  <div class="form-group">
                    <label>Value</label>
                    <input name="additional[value][]" class="form-control " type="text" placeholder="Value" id="additional_value" value="" requiredd="">
                  </div>
                </div>

                <!-- <div class="col-sm-1">
            <div class="form-group">
              <label>Add</label>

              <button type="button" class="btn btn-block btn-default btn-sm" onclick="add_more()" style="height: 38px;"><i class="fas fa-plus"></i></button>
            </div>
          </div> -->

                <div class="col-sm-2">
                  <div class="form-group float-right">
                    <label>Remove</label>

                    <button type="button" class="btn btn-block btn-default btn-md" onclick="remove_more(this)"><i class="fas fa-times"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="form-group col-sm-2 float-right">
              <button type="button" class="btn btn-block btn-primary btn-sm" onclick="add_more()"><i class="fas fa-plus"></i> Add Row</button>
            </div>
          </div>
        </div>
        <!-- Features -->
        <!-- Features -->
        <div class="card ">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Features</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="1" class="custom-control-input" type="checkbox" id="customCheckbox_1">
                    <label for="customCheckbox_1" class="custom-control-label">Air Conditioning</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="2" class="custom-control-input" type="checkbox" id="customCheckbox_2">
                    <label for="customCheckbox_2" class="custom-control-label">Lawn</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="3" class="custom-control-input" type="checkbox" id="customCheckbox_3">
                    <label for="customCheckbox_3" class="custom-control-label">Swimming Pool</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="4" class="custom-control-input" type="checkbox" id="customCheckbox_4">
                    <label for="customCheckbox_4" class="custom-control-label">Barbeque</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="5" class="custom-control-input" type="checkbox" id="customCheckbox_5">
                    <label for="customCheckbox_5" class="custom-control-label">Microwave</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="6" class="custom-control-input" type="checkbox" id="customCheckbox_6">
                    <label for="customCheckbox_6" class="custom-control-label">TV Cable</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="7" class="custom-control-input" type="checkbox" id="customCheckbox_7">
                    <label for="customCheckbox_7" class="custom-control-label">Dryer</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="8" class="custom-control-input" type="checkbox" id="customCheckbox_8">
                    <label for="customCheckbox_8" class="custom-control-label">Outdoor Shower</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="9" class="custom-control-input" type="checkbox" id="customCheckbox_9">
                    <label for="customCheckbox_9" class="custom-control-label">Washer</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="10" class="custom-control-input" type="checkbox" id="customCheckbox_10">
                    <label for="customCheckbox_10" class="custom-control-label">Gym</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="11" class="custom-control-input" type="checkbox" id="customCheckbox_11">
                    <label for="customCheckbox_11" class="custom-control-label">Refrigerator</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="12" class="custom-control-input" type="checkbox" id="customCheckbox_12">
                    <label for="customCheckbox_12" class="custom-control-label">WiFi</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="13" class="custom-control-input" type="checkbox" id="customCheckbox_13">
                    <label for="customCheckbox_13" class="custom-control-label">Laundry</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="14" class="custom-control-input" type="checkbox" id="customCheckbox_14">
                    <label for="customCheckbox_14" class="custom-control-label">Sauna</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="15" class="custom-control-input" type="checkbox" id="customCheckbox_15">
                    <label for="customCheckbox_15" class="custom-control-label">Window Coverings</label>
                  </div>

                </div>
              </div>
              <div class="col-sm-3">
                <!-- checkbox -->
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input name="features[]" value="21" class="custom-control-input" type="checkbox" id="customCheckbox_21">
                    <label for="customCheckbox_21" class="custom-control-label">Hammam</label>
                  </div>

                </div>
              </div>
            </div>
            <!-- Save -->

            <!-- <hr><hr> -->

          </div>
        </div>

        <!-- Loaction -->
        <!-- Loaction -->
        <div class="card ">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Location</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">

              <!-- pa_id	pa_address	pa_postal_code	pa_country	pa_state	pa_city	pa_area -->

              <!-- Country -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="">Country</label> <i class="req text-danger text-danger"> *</i>
                  <select name="country" class="form-control select2-hidden-accessible" id="country" data-select2-id="country" tabindex="-1" aria-hidden="true">
                    <option value="" selected="selected" data-select2-id="10">Select country</option>
                    <option value="101">India</option>
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 311.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>

              <!-- State -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="">State</label> <i class="req text-danger text-danger"> *</i>
                  <select name="state" class="form-control select2-hidden-accessible" id="state" data-select2-id="state" tabindex="-1" aria-hidden="true">
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="11" style="width: 311.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-container"><span class="select2-selection__rendered" id="select2-state-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>

              <!-- City -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="">City</label> <i class="req text-danger text-danger"> *</i>
                  <select name="city" class="form-control select2-hidden-accessible" id="city" data-select2-id="city" tabindex="-1" aria-hidden="true">
                  </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style="width: 311.984px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city-container"><span class="select2-selection__rendered" id="select2-city-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Select option</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label for="address">Address</label> <small class="req text-danger"> *</small>
                  <input name="address" class="form-control " type="text" placeholder="Address" id="address" value="">
                </div>
              </div>

              <!-- Area -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="area">Area</label> <small class="req text-danger"> *</small>
                  <input name="area" class="form-control " type="text" placeholder="Area" id="area" value="">
                </div>
              </div>

              <!-- Zip/Postal Code -->
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="postal_code">Postal Code</label> <small class="req text-danger"> *</small>
                  <input name="postal_code" class="form-control " type="text" placeholder="Postal Code" id="postal_code" value="">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Floor Plans -->

        <!-- Private Note -->
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title"> Property Setting</h3>
            <div class="card-tools">
              <!-- <span title="3 New Messages" class="badge badge-primary">3</span> -->
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Write private note for this property, it will not display for public. </label>
                  <textarea id="private_note" name="private_note" class="form-control summernote" rows="6" placeholder="" style="display: none;"></textarea>
                  <div class="note-editor note-frame card">
                    <div class="note-dropzone">
                      <div class="note-dropzone-message"></div>
                    </div>
                    <div class="note-toolbar card-header" role="toolbar">
                      <div class="note-btn-group btn-group note-style">
                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Style" data-original-title="Style"><i class="note-icon-magic"></i></button>
                          <div class="note-dropdown-menu dropdown-menu dropdown-style" role="list" aria-label="Style"><a class="dropdown-item" href="#" data-value="p" role="listitem" aria-label="p">
                              <p>Normal</p>
                            </a><a class="dropdown-item" href="#" data-value="blockquote" role="listitem" aria-label="blockquote">
                              <blockquote class="blockquote">Blockquote</blockquote>
                            </a><a class="dropdown-item" href="#" data-value="pre" role="listitem" aria-label="pre">
                              <pre>Code</pre>
                            </a><a class="dropdown-item" href="#" data-value="h1" role="listitem" aria-label="h1">
                              <h1>Header 1</h1>
                            </a><a class="dropdown-item" href="#" data-value="h2" role="listitem" aria-label="h2">
                              <h2>Header 2</h2>
                            </a><a class="dropdown-item" href="#" data-value="h3" role="listitem" aria-label="h3">
                              <h3>Header 3</h3>
                            </a><a class="dropdown-item" href="#" data-value="h4" role="listitem" aria-label="h4">
                              <h4>Header 4</h4>
                            </a><a class="dropdown-item" href="#" data-value="h5" role="listitem" aria-label="h5">
                              <h5>Header 5</h5>
                            </a><a class="dropdown-item" href="#" data-value="h6" role="listitem" aria-label="h6">
                              <h6>Header 6</h6>
                            </a></div>
                        </div>
                      </div>
                      <div class="note-btn-group btn-group note-font"><button type="button" class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1" title="" aria-label="Bold (CTRL+B)" data-original-title="Bold (CTRL+B)"><i class="note-icon-bold"></i></button><button type="button" class="note-btn btn btn-light btn-sm note-btn-underline" tabindex="-1" title="" aria-label="Underline (CTRL+U)" data-original-title="Underline (CTRL+U)"><i class="note-icon-underline"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove Font Style (CTRL+\)" data-original-title="Remove Font Style (CTRL+\)"><i class="note-icon-eraser"></i></button></div>
                      <div class="note-btn-group btn-group note-fontname">
                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Font Family" data-original-title="Font Family"><span class="note-current-fontname" style="font-family: &quot;Source Sans Pro&quot;;">Source Sans Pro</span></button>
                          <div class="note-dropdown-menu dropdown-menu note-check dropdown-fontname" role="list" aria-label="Font Family"><a class="dropdown-item" href="#" data-value="Arial" role="listitem" aria-label="Arial"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial'">Arial</span></a><a class="dropdown-item" href="#" data-value="Arial Black" role="listitem" aria-label="Arial Black"><i class="note-icon-menu-check"></i> <span style="font-family: 'Arial Black'">Arial Black</span></a><a class="dropdown-item" href="#" data-value="Comic Sans MS" role="listitem" aria-label="Comic Sans MS"><i class="note-icon-menu-check"></i> <span style="font-family: 'Comic Sans MS'">Comic Sans MS</span></a><a class="dropdown-item" href="#" data-value="Courier New" role="listitem" aria-label="Courier New"><i class="note-icon-menu-check"></i> <span style="font-family: 'Courier New'">Courier New</span></a><a class="dropdown-item" href="#" data-value="Helvetica" role="listitem" aria-label="Helvetica"><i class="note-icon-menu-check"></i> <span style="font-family: 'Helvetica'">Helvetica</span></a><a class="dropdown-item" href="#" data-value="Impact" role="listitem" aria-label="Impact"><i class="note-icon-menu-check"></i> <span style="font-family: 'Impact'">Impact</span></a><a class="dropdown-item" href="#" data-value="Tahoma" role="listitem" aria-label="Tahoma"><i class="note-icon-menu-check"></i> <span style="font-family: 'Tahoma'">Tahoma</span></a><a class="dropdown-item" href="#" data-value="Times New Roman" role="listitem" aria-label="Times New Roman"><i class="note-icon-menu-check"></i> <span style="font-family: 'Times New Roman'">Times New Roman</span></a><a class="dropdown-item" href="#" data-value="Verdana" role="listitem" aria-label="Verdana"><i class="note-icon-menu-check"></i> <span style="font-family: 'Verdana'">Verdana</span></a><a class="dropdown-item checked" href="#" data-value="Source Sans Pro" role="listitem" aria-label="Source Sans Pro"><i class="note-icon-menu-check"></i> <span style="font-family: 'Source Sans Pro'">Source Sans Pro</span></a><a class="dropdown-item" href="#" data-value="Segoe UI" role="listitem" aria-label="Segoe UI"><i class="note-icon-menu-check"></i> <span style="font-family: 'Segoe UI'">Segoe UI</span></a><a class="dropdown-item" href="#" data-value="Segoe UI Emoji" role="listitem" aria-label="Segoe UI Emoji"><i class="note-icon-menu-check"></i> <span style="font-family: 'Segoe UI Emoji'">Segoe UI Emoji</span></a><a class="dropdown-item" href="#" data-value="Segoe UI Symbol" role="listitem" aria-label="Segoe UI Symbol"><i class="note-icon-menu-check"></i> <span style="font-family: 'Segoe UI Symbol'">Segoe UI Symbol</span></a></div>
                        </div>
                      </div>
                      <div class="note-btn-group btn-group note-color">
                        <div class="note-btn-group btn-group note-color note-color-all"><button type="button" class="note-btn btn btn-light btn-sm note-current-color-button" tabindex="-1" title="" aria-label="Recent Color" data-original-title="Recent Color" data-backcolor="#FFFF00" data-forecolor="#000000"><i class="note-icon-font note-recent-color" style="background-color: rgb(255, 255, 0); color: rgb(0, 0, 0);"></i></button><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="More Color" data-original-title="More Color"></button>
                          <div class="note-dropdown-menu dropdown-menu" role="list">
                            <div class="note-palette">
                              <div class="note-palette-title">Background Color</div>
                              <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="backColor" data-value="transparent">Transparent</button></div>
                              <div class="note-holder" data-event="backColor">
                                <!-- back colors -->
                                <div class="note-color-palette">
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="backColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="backColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="backColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="backColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="backColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="backColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="backColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="backColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="backColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="backColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="backColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="backColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="backColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="backColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="backColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="backColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="backColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="backColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="backColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="backColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="backColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="backColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="backColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="backColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="backColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="backColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="backColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="backColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="backColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="backColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="backColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="backColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="backColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="backColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="backColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="backColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="backColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="backColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="backColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="backColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="backColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="backColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="backColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="backColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="backColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="backColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="backColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="backColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="backColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="backColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="backColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="backColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="backColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="backColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="backColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="backColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="backColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="backColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="backColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="backColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="backColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="backColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="backColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                </div>
                              </div>
                              <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="backColorPicker">Select</button><input type="color" id="backColorPicker" class="note-btn note-color-select-btn" value="#FFFF00" data-event="backColorPalette"></div>
                              <div class="note-holder-custom" id="backColorPalette" data-event="backColor">
                                <div class="note-color-palette">
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="backColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                </div>
                              </div>
                            </div>
                            <div class="note-palette">
                              <div class="note-palette-title">Text Color</div>
                              <div><button type="button" class="note-color-reset btn btn-light btn-default" data-event="removeFormat" data-value="foreColor">Reset to default</button></div>
                              <div class="note-holder" data-event="foreColor">
                                <!-- fore colors -->
                                <div class="note-color-palette">
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#000000" data-event="foreColor" data-value="#000000" title="" aria-label="Black" data-toggle="button" tabindex="-1" data-original-title="Black"></button><button type="button" class="note-color-btn" style="background-color:#424242" data-event="foreColor" data-value="#424242" title="" aria-label="Tundora" data-toggle="button" tabindex="-1" data-original-title="Tundora"></button><button type="button" class="note-color-btn" style="background-color:#636363" data-event="foreColor" data-value="#636363" title="" aria-label="Dove Gray" data-toggle="button" tabindex="-1" data-original-title="Dove Gray"></button><button type="button" class="note-color-btn" style="background-color:#9C9C94" data-event="foreColor" data-value="#9C9C94" title="" aria-label="Star Dust" data-toggle="button" tabindex="-1" data-original-title="Star Dust"></button><button type="button" class="note-color-btn" style="background-color:#CEC6CE" data-event="foreColor" data-value="#CEC6CE" title="" aria-label="Pale Slate" data-toggle="button" tabindex="-1" data-original-title="Pale Slate"></button><button type="button" class="note-color-btn" style="background-color:#EFEFEF" data-event="foreColor" data-value="#EFEFEF" title="" aria-label="Gallery" data-toggle="button" tabindex="-1" data-original-title="Gallery"></button><button type="button" class="note-color-btn" style="background-color:#F7F7F7" data-event="foreColor" data-value="#F7F7F7" title="" aria-label="Alabaster" data-toggle="button" tabindex="-1" data-original-title="Alabaster"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="White" data-toggle="button" tabindex="-1" data-original-title="White"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FF0000" data-event="foreColor" data-value="#FF0000" title="" aria-label="Red" data-toggle="button" tabindex="-1" data-original-title="Red"></button><button type="button" class="note-color-btn" style="background-color:#FF9C00" data-event="foreColor" data-value="#FF9C00" title="" aria-label="Orange Peel" data-toggle="button" tabindex="-1" data-original-title="Orange Peel"></button><button type="button" class="note-color-btn" style="background-color:#FFFF00" data-event="foreColor" data-value="#FFFF00" title="" aria-label="Yellow" data-toggle="button" tabindex="-1" data-original-title="Yellow"></button><button type="button" class="note-color-btn" style="background-color:#00FF00" data-event="foreColor" data-value="#00FF00" title="" aria-label="Green" data-toggle="button" tabindex="-1" data-original-title="Green"></button><button type="button" class="note-color-btn" style="background-color:#00FFFF" data-event="foreColor" data-value="#00FFFF" title="" aria-label="Cyan" data-toggle="button" tabindex="-1" data-original-title="Cyan"></button><button type="button" class="note-color-btn" style="background-color:#0000FF" data-event="foreColor" data-value="#0000FF" title="" aria-label="Blue" data-toggle="button" tabindex="-1" data-original-title="Blue"></button><button type="button" class="note-color-btn" style="background-color:#9C00FF" data-event="foreColor" data-value="#9C00FF" title="" aria-label="Electric Violet" data-toggle="button" tabindex="-1" data-original-title="Electric Violet"></button><button type="button" class="note-color-btn" style="background-color:#FF00FF" data-event="foreColor" data-value="#FF00FF" title="" aria-label="Magenta" data-toggle="button" tabindex="-1" data-original-title="Magenta"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#F7C6CE" data-event="foreColor" data-value="#F7C6CE" title="" aria-label="Azalea" data-toggle="button" tabindex="-1" data-original-title="Azalea"></button><button type="button" class="note-color-btn" style="background-color:#FFE7CE" data-event="foreColor" data-value="#FFE7CE" title="" aria-label="Karry" data-toggle="button" tabindex="-1" data-original-title="Karry"></button><button type="button" class="note-color-btn" style="background-color:#FFEFC6" data-event="foreColor" data-value="#FFEFC6" title="" aria-label="Egg White" data-toggle="button" tabindex="-1" data-original-title="Egg White"></button><button type="button" class="note-color-btn" style="background-color:#D6EFD6" data-event="foreColor" data-value="#D6EFD6" title="" aria-label="Zanah" data-toggle="button" tabindex="-1" data-original-title="Zanah"></button><button type="button" class="note-color-btn" style="background-color:#CEDEE7" data-event="foreColor" data-value="#CEDEE7" title="" aria-label="Botticelli" data-toggle="button" tabindex="-1" data-original-title="Botticelli"></button><button type="button" class="note-color-btn" style="background-color:#CEE7F7" data-event="foreColor" data-value="#CEE7F7" title="" aria-label="Tropical Blue" data-toggle="button" tabindex="-1" data-original-title="Tropical Blue"></button><button type="button" class="note-color-btn" style="background-color:#D6D6E7" data-event="foreColor" data-value="#D6D6E7" title="" aria-label="Mischka" data-toggle="button" tabindex="-1" data-original-title="Mischka"></button><button type="button" class="note-color-btn" style="background-color:#E7D6DE" data-event="foreColor" data-value="#E7D6DE" title="" aria-label="Twilight" data-toggle="button" tabindex="-1" data-original-title="Twilight"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E79C9C" data-event="foreColor" data-value="#E79C9C" title="" aria-label="Tonys Pink" data-toggle="button" tabindex="-1" data-original-title="Tonys Pink"></button><button type="button" class="note-color-btn" style="background-color:#FFC69C" data-event="foreColor" data-value="#FFC69C" title="" aria-label="Peach Orange" data-toggle="button" tabindex="-1" data-original-title="Peach Orange"></button><button type="button" class="note-color-btn" style="background-color:#FFE79C" data-event="foreColor" data-value="#FFE79C" title="" aria-label="Cream Brulee" data-toggle="button" tabindex="-1" data-original-title="Cream Brulee"></button><button type="button" class="note-color-btn" style="background-color:#B5D6A5" data-event="foreColor" data-value="#B5D6A5" title="" aria-label="Sprout" data-toggle="button" tabindex="-1" data-original-title="Sprout"></button><button type="button" class="note-color-btn" style="background-color:#A5C6CE" data-event="foreColor" data-value="#A5C6CE" title="" aria-label="Casper" data-toggle="button" tabindex="-1" data-original-title="Casper"></button><button type="button" class="note-color-btn" style="background-color:#9CC6EF" data-event="foreColor" data-value="#9CC6EF" title="" aria-label="Perano" data-toggle="button" tabindex="-1" data-original-title="Perano"></button><button type="button" class="note-color-btn" style="background-color:#B5A5D6" data-event="foreColor" data-value="#B5A5D6" title="" aria-label="Cold Purple" data-toggle="button" tabindex="-1" data-original-title="Cold Purple"></button><button type="button" class="note-color-btn" style="background-color:#D6A5BD" data-event="foreColor" data-value="#D6A5BD" title="" aria-label="Careys Pink" data-toggle="button" tabindex="-1" data-original-title="Careys Pink"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#E76363" data-event="foreColor" data-value="#E76363" title="" aria-label="Mandy" data-toggle="button" tabindex="-1" data-original-title="Mandy"></button><button type="button" class="note-color-btn" style="background-color:#F7AD6B" data-event="foreColor" data-value="#F7AD6B" title="" aria-label="Rajah" data-toggle="button" tabindex="-1" data-original-title="Rajah"></button><button type="button" class="note-color-btn" style="background-color:#FFD663" data-event="foreColor" data-value="#FFD663" title="" aria-label="Dandelion" data-toggle="button" tabindex="-1" data-original-title="Dandelion"></button><button type="button" class="note-color-btn" style="background-color:#94BD7B" data-event="foreColor" data-value="#94BD7B" title="" aria-label="Olivine" data-toggle="button" tabindex="-1" data-original-title="Olivine"></button><button type="button" class="note-color-btn" style="background-color:#73A5AD" data-event="foreColor" data-value="#73A5AD" title="" aria-label="Gulf Stream" data-toggle="button" tabindex="-1" data-original-title="Gulf Stream"></button><button type="button" class="note-color-btn" style="background-color:#6BADDE" data-event="foreColor" data-value="#6BADDE" title="" aria-label="Viking" data-toggle="button" tabindex="-1" data-original-title="Viking"></button><button type="button" class="note-color-btn" style="background-color:#8C7BC6" data-event="foreColor" data-value="#8C7BC6" title="" aria-label="Blue Marguerite" data-toggle="button" tabindex="-1" data-original-title="Blue Marguerite"></button><button type="button" class="note-color-btn" style="background-color:#C67BA5" data-event="foreColor" data-value="#C67BA5" title="" aria-label="Puce" data-toggle="button" tabindex="-1" data-original-title="Puce"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#CE0000" data-event="foreColor" data-value="#CE0000" title="" aria-label="Guardsman Red" data-toggle="button" tabindex="-1" data-original-title="Guardsman Red"></button><button type="button" class="note-color-btn" style="background-color:#E79439" data-event="foreColor" data-value="#E79439" title="" aria-label="Fire Bush" data-toggle="button" tabindex="-1" data-original-title="Fire Bush"></button><button type="button" class="note-color-btn" style="background-color:#EFC631" data-event="foreColor" data-value="#EFC631" title="" aria-label="Golden Dream" data-toggle="button" tabindex="-1" data-original-title="Golden Dream"></button><button type="button" class="note-color-btn" style="background-color:#6BA54A" data-event="foreColor" data-value="#6BA54A" title="" aria-label="Chelsea Cucumber" data-toggle="button" tabindex="-1" data-original-title="Chelsea Cucumber"></button><button type="button" class="note-color-btn" style="background-color:#4A7B8C" data-event="foreColor" data-value="#4A7B8C" title="" aria-label="Smalt Blue" data-toggle="button" tabindex="-1" data-original-title="Smalt Blue"></button><button type="button" class="note-color-btn" style="background-color:#3984C6" data-event="foreColor" data-value="#3984C6" title="" aria-label="Boston Blue" data-toggle="button" tabindex="-1" data-original-title="Boston Blue"></button><button type="button" class="note-color-btn" style="background-color:#634AA5" data-event="foreColor" data-value="#634AA5" title="" aria-label="Butterfly Bush" data-toggle="button" tabindex="-1" data-original-title="Butterfly Bush"></button><button type="button" class="note-color-btn" style="background-color:#A54A7B" data-event="foreColor" data-value="#A54A7B" title="" aria-label="Cadillac" data-toggle="button" tabindex="-1" data-original-title="Cadillac"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#9C0000" data-event="foreColor" data-value="#9C0000" title="" aria-label="Sangria" data-toggle="button" tabindex="-1" data-original-title="Sangria"></button><button type="button" class="note-color-btn" style="background-color:#B56308" data-event="foreColor" data-value="#B56308" title="" aria-label="Mai Tai" data-toggle="button" tabindex="-1" data-original-title="Mai Tai"></button><button type="button" class="note-color-btn" style="background-color:#BD9400" data-event="foreColor" data-value="#BD9400" title="" aria-label="Buddha Gold" data-toggle="button" tabindex="-1" data-original-title="Buddha Gold"></button><button type="button" class="note-color-btn" style="background-color:#397B21" data-event="foreColor" data-value="#397B21" title="" aria-label="Forest Green" data-toggle="button" tabindex="-1" data-original-title="Forest Green"></button><button type="button" class="note-color-btn" style="background-color:#104A5A" data-event="foreColor" data-value="#104A5A" title="" aria-label="Eden" data-toggle="button" tabindex="-1" data-original-title="Eden"></button><button type="button" class="note-color-btn" style="background-color:#085294" data-event="foreColor" data-value="#085294" title="" aria-label="Venice Blue" data-toggle="button" tabindex="-1" data-original-title="Venice Blue"></button><button type="button" class="note-color-btn" style="background-color:#311873" data-event="foreColor" data-value="#311873" title="" aria-label="Meteorite" data-toggle="button" tabindex="-1" data-original-title="Meteorite"></button><button type="button" class="note-color-btn" style="background-color:#731842" data-event="foreColor" data-value="#731842" title="" aria-label="Claret" data-toggle="button" tabindex="-1" data-original-title="Claret"></button></div>
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#630000" data-event="foreColor" data-value="#630000" title="" aria-label="Rosewood" data-toggle="button" tabindex="-1" data-original-title="Rosewood"></button><button type="button" class="note-color-btn" style="background-color:#7B3900" data-event="foreColor" data-value="#7B3900" title="" aria-label="Cinnamon" data-toggle="button" tabindex="-1" data-original-title="Cinnamon"></button><button type="button" class="note-color-btn" style="background-color:#846300" data-event="foreColor" data-value="#846300" title="" aria-label="Olive" data-toggle="button" tabindex="-1" data-original-title="Olive"></button><button type="button" class="note-color-btn" style="background-color:#295218" data-event="foreColor" data-value="#295218" title="" aria-label="Parsley" data-toggle="button" tabindex="-1" data-original-title="Parsley"></button><button type="button" class="note-color-btn" style="background-color:#083139" data-event="foreColor" data-value="#083139" title="" aria-label="Tiber" data-toggle="button" tabindex="-1" data-original-title="Tiber"></button><button type="button" class="note-color-btn" style="background-color:#003163" data-event="foreColor" data-value="#003163" title="" aria-label="Midnight Blue" data-toggle="button" tabindex="-1" data-original-title="Midnight Blue"></button><button type="button" class="note-color-btn" style="background-color:#21104A" data-event="foreColor" data-value="#21104A" title="" aria-label="Valentino" data-toggle="button" tabindex="-1" data-original-title="Valentino"></button><button type="button" class="note-color-btn" style="background-color:#4A1031" data-event="foreColor" data-value="#4A1031" title="" aria-label="Loulou" data-toggle="button" tabindex="-1" data-original-title="Loulou"></button></div>
                                </div>
                              </div>
                              <div><button type="button" class="note-color-select btn btn-light btn-default" data-event="openPalette" data-value="foreColorPicker">Select</button><input type="color" id="foreColorPicker" class="note-btn note-color-select-btn" value="#000000" data-event="foreColorPalette"></div>
                              <div class="note-holder-custom" id="foreColorPalette" data-event="foreColor">
                                <div class="note-color-palette">
                                  <div class="note-color-row"><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button><button type="button" class="note-color-btn" style="background-color:#FFFFFF" data-event="foreColor" data-value="#FFFFFF" title="" aria-label="#FFFFFF" data-toggle="button" tabindex="-1" data-original-title="#FFFFFF"></button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Unordered list (CTRL+SHIFT+NUM7)" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Ordered list (CTRL+SHIFT+NUM8)" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button>
                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Paragraph" data-original-title="Paragraph"><i class="note-icon-align-left"></i></button>
                          <div class="note-dropdown-menu dropdown-menu" role="list">
                            <div class="note-btn-group btn-group note-align"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Align left (CTRL+SHIFT+L)" data-original-title="Align left (CTRL+SHIFT+L)"><i class="note-icon-align-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Align center (CTRL+SHIFT+E)" data-original-title="Align center (CTRL+SHIFT+E)"><i class="note-icon-align-center"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Align right (CTRL+SHIFT+R)" data-original-title="Align right (CTRL+SHIFT+R)"><i class="note-icon-align-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Justify full (CTRL+SHIFT+J)" data-original-title="Justify full (CTRL+SHIFT+J)"><i class="note-icon-align-justify"></i></button></div>
                            <div class="note-btn-group btn-group note-list"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Outdent (CTRL+[)" data-original-title="Outdent (CTRL+[)"><i class="note-icon-align-outdent"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Indent (CTRL+])" data-original-title="Indent (CTRL+])"><i class="note-icon-align-indent"></i></button></div>
                          </div>
                        </div>
                      </div>
                      <div class="note-btn-group btn-group note-table">
                        <div class="note-btn-group btn-group"><button type="button" class="note-btn btn btn-light btn-sm dropdown-toggle" tabindex="-1" data-toggle="dropdown" title="" aria-label="Table" data-original-title="Table"><i class="note-icon-table"></i></button>
                          <div class="note-dropdown-menu dropdown-menu note-table" role="list" aria-label="Table">
                            <div class="note-dimension-picker">
                              <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1" style="width: 10em; height: 10em;"></div>
                              <div class="note-dimension-picker-highlighted"></div>
                              <div class="note-dimension-picker-unhighlighted"></div>
                            </div>
                            <div class="note-dimension-display">1 x 1</div>
                          </div>
                        </div>
                      </div>
                      <div class="note-btn-group btn-group note-insert"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Link (CTRL+K)" data-original-title="Link (CTRL+K)"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Picture" data-original-title="Picture"><i class="note-icon-picture"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Video" data-original-title="Video"><i class="note-icon-video"></i></button></div>
                      <div class="note-btn-group btn-group note-view"><button type="button" class="note-btn btn btn-light btn-sm btn-fullscreen note-codeview-keep" tabindex="-1" title="" aria-label="Full Screen" data-original-title="Full Screen"><i class="note-icon-arrows-alt"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-codeview note-codeview-keep" tabindex="-1" title="" aria-label="Code View" data-original-title="Code View"><i class="note-icon-code"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Help" data-original-title="Help"><i class="note-icon-question"></i></button></div>
                    </div>
                    <div class="note-editing-area">
                      <div class="note-handle">
                        <div class="note-control-selection">
                          <div class="note-control-selection-bg"></div>
                          <div class="note-control-holder note-control-nw"></div>
                          <div class="note-control-holder note-control-ne"></div>
                          <div class="note-control-holder note-control-sw"></div>
                          <div class="note-control-sizing note-control-se"></div>
                          <div class="note-control-selection-info"></div>
                        </div>
                      </div><textarea class="note-codable" aria-multiline="true"></textarea>
                      <div class="note-editable card-block" contenteditable="true" role="textbox" aria-multiline="true" spellcheck="true" autocorrect="true">
                        <p><br></p>
                      </div>
                    </div><output class="note-status-output" role="status" aria-live="polite"></output>
                    <div class="note-statusbar" role="status">
                      <div class="note-resizebar" aria-label="Resize">
                        <div class="note-icon-bar"></div>
                        <div class="note-icon-bar"></div>
                        <div class="note-icon-bar"></div>
                      </div>
                    </div>
                    <div class="modal note-modal link-dialog" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Link">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Insert Link</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group note-form-group"><label for="note-dialog-link-txt-16445119457332" class="note-form-label">Text to display</label><input id="note-dialog-link-txt-16445119457332" class="note-link-text form-control note-form-control note-input" type="text"></div>
                            <div class="form-group note-form-group"><label for="note-dialog-link-url-16445119457332" class="note-form-label">To what URL should this link go?</label><input id="note-dialog-link-url-16445119457332" class="note-link-url form-control note-form-control note-input" type="text" value="http://"></div>
                            <div class="form-check sn-checkbox-open-in-new-window"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="" aria-label="Open in new window" aria-checked="true"> Open in new window</label></div>
                            <div class="form-check sn-checkbox-use-protocol"><label class="form-check-label"><input type="checkbox" class="form-check-input" checked="" aria-label="Use default protocol" aria-checked="true"> Use default protocol</label></div>
                          </div>
                          <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-link-btn" value="Insert Link" disabled=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="note-popover popover in note-link-popover bottom">
                      <div class="arrow"></div>
                      <div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
                        <div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Edit" data-original-title="Edit"><i class="note-icon-link"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Unlink" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button></div>
                      </div>
                    </div>
                    <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Image">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Insert Image</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group note-form-group note-group-select-from-files"><label for="note-dialog-image-file-16445119457332" class="note-form-label">Select from files</label><input id="note-dialog-image-file-16445119457332" class="note-image-input form-control-file note-form-control note-input" type="file" name="files" accept="image/*" multiple="multiple"></div>
                            <div class="form-group note-group-image-url"><label for="note-dialog-image-url-16445119457332" class="note-form-label">Image URL</label><input id="note-dialog-image-url-16445119457332" class="note-image-url form-control note-form-control note-input" type="text"></div>
                          </div>
                          <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-image-btn" value="Insert Image" disabled=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="note-popover popover in note-image-popover bottom">
                      <div class="arrow"></div>
                      <div class="popover-content note-children-container">
                        <div class="note-btn-group btn-group note-resize"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize full" data-original-title="Resize full"><span class="note-fontsize-10">100%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize half" data-original-title="Resize half"><span class="note-fontsize-10">50%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Resize quarter" data-original-title="Resize quarter"><span class="note-fontsize-10">25%</span></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Original size" data-original-title="Original size"><i class="note-icon-rollback"></i></button></div>
                        <div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Float Left" data-original-title="Float Left"><i class="note-icon-float-left"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Float Right" data-original-title="Float Right"><i class="note-icon-float-right"></i></button><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove float" data-original-title="Remove float"><i class="note-icon-rollback"></i></button></div>
                        <div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-light btn-sm" tabindex="-1" title="" aria-label="Remove Image" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
                      </div>
                    </div>
                    <div class="note-popover popover in note-table-popover bottom">
                      <div class="arrow"></div>
                      <div class="popover-content note-children-container">
                        <div class="note-btn-group btn-group note-add"><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add row below" data-original-title="Add row below"><i class="note-icon-row-below"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add row above" data-original-title="Add row above"><i class="note-icon-row-above"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add column left" data-original-title="Add column left"><i class="note-icon-col-before"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Add column right" data-original-title="Add column right"><i class="note-icon-col-after"></i></button></div>
                        <div class="note-btn-group btn-group note-delete"><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete row" data-original-title="Delete row"><i class="note-icon-row-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete column" data-original-title="Delete column"><i class="note-icon-col-remove"></i></button><button type="button" class="note-btn btn btn-light btn-sm btn-md" tabindex="-1" title="" aria-label="Delete table" data-original-title="Delete table"><i class="note-icon-trash"></i></button></div>
                      </div>
                    </div>
                    <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Insert Video">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Insert Video</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group note-form-group row-fluid"><label for="note-dialog-video-url-16445119457332" class="note-form-label">Video URL <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label><input id="note-dialog-video-url-16445119457332" class="note-video-url form-control note-form-control note-input" type="text"></div>
                          </div>
                          <div class="modal-footer"><input type="button" href="#" class="btn btn-primary note-btn note-btn-primary note-video-btn" value="Insert Video" disabled=""></div>
                        </div>
                      </div>
                    </div>
                    <div class="modal note-modal" aria-hidden="false" tabindex="-1" role="dialog" aria-label="Help">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Help</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close" aria-hidden="true">×</button>
                          </div>
                          <div class="modal-body" style="max-height: 300px; overflow: scroll;">
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ESC</kbd></label><span>Escape</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undo the last command</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redo the last command</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
                            <div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span>
                          </div>
                          <div class="modal-footer">
                            <p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.18</a> · <a href="https://github.com/summernote/summernote" target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group clearfix">

                  <label for="">Do you want to mark this property as featured?</label>
                  <div class="icheck-danger d-inline float-right">
                    <input type="radio" name="featured" id="featured_property2" value="0">
                    <label for="featured_property2"> No
                    </label>
                  </div>

                  <div class="icheck-primary d-inline float-right">
                    <input type="radio" name="featured" checked="" id="featured_property1" value="1">
                    <label for="featured_property1"> Yes &nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group clearfix">

                  <label for="">Do you want to publish this property else it will be saved in draft?</label>
                  <div class="icheck-danger d-inline float-right">
                    <input type="radio" name="published" id="published" value="0">
                    <label for="published"> No
                    </label>
                  </div>

                  <div class="icheck-primary d-inline float-right">
                    <input type="radio" name="published" checked="" id="published" value="1">
                    <label for="published"> Yes &nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-group clearfix">

                  <label for="">Do you want this property to be shown in a home slider?</label>
                  <div class="icheck-danger d-inline float-right">
                    <input type="radio" name="slided" id="slided" value="0">
                    <label for="slided"> No
                    </label>
                  </div>

                  <div class="icheck-primary d-inline float-right">
                    <input type="radio" name="slided" checked="" id="slided" value="1">
                    <label for="slided"> Yes &nbsp;&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Save Button -->
        <div class="card">

          <div class="card-footer ">
            <div class="form-group offset-sm-8 col-sm-4">
              <!-- <label>Submit</label> -->
              <button type="submit" name="save" value="add_property" class="form-control btn btn-primary btn-sm  checkbox-toggle"><i class="fa fa-plus"> &nbsp;Save</i></button>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>


  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/select2/js/select2.full.min.js"></script>

  <!-- Summernote -->
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/summernote/summernote-bs4.min.js"></script>

  <!-- Bootstrap Switch -->
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>

  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- jquery-validation -->
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/jquery-validation/jquery.validate.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/almasaeed2010/adminlte/plugins/jquery-validation/additional-methods.min.js"></script>

  <script>
    $(function() {
      $.validator.setDefaults({
        // submitHandler: function() {
        //   alert("Form successful submitted!");
        //   $('#save_property_form').submit();
        // }
      });
      $('#save_property_formo').validate({
        rules: {
          property_title: {
            required: true,
            minlength: 10,
            maxlength: 150

          }
        },
        messages: {
          property_title: {
            required: "Please enter a email address",
            minlength: "Please enter at least 10 characters",
            maxlength: "Please enter less than 150 characters",
          }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        }
      });
    });
  </script>


  <script>
    function add_more_floor_plan() {
      var row_count_floor_plan = $("#row_count_floor_plan").val();
      row_count_floor_plan++;
      $("#row_count_floor_plan").val(row_count_floor_plan);
      $("#floor_plan_container_div").append($("#floor_plan_container_div > div:last").clone());
    }

    function remove_more_floor_plan(current) {
      if ($("#floor_plan_container_div > div").length > 1) {
        $(current.closest(".row")).remove();
        var row_count_floor_plan = $("#row_count_floor_plan").val();
        row_count_floor_plan--;
        $("#row_count_floor_plan").val(row_count_floor_plan);
      }
    }

    function add_more() {
      var row_count = $("#row_count").val();
      row_count++;
      $("#row_count").val(row_count);
      var new_row = $("#aditional_details > div:last").clone();
      new_row.find('#additional_title').val('');
      new_row.find('#additional_value').val('');
      $("#aditional_details").append(new_row);
    }

    function remove_more(current) {
      if ($("#aditional_details > div").length > 1) {
        $(current.closest(".row")).remove();
        var row_count = $("#row_count").val();
        row_count--;
        $("#row_count").val(row_count);
      }
    }
  </script>

  <script>
    $(function() {
      // Summernote
      $('.summernote').summernote();

      // Fix the toggle button on summernote
      $('button[data-toggle="dropdown"]').on('click', function() {
        $(this).siblings('div').toggleClass('show');
        $(this).parent().toggleClass('show');
      });
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function() {

      $("select.form-control:not(.dont-select-me)").select2({
        placeholder: "Select option",
        allowClear: true
      });

      $('[data-toggle="tooltip"]').tooltip();
      //bsCustomFileInput.init();
      var browseFile = $('#attach_file');
      var form = $('#save_station_form');
      var progress = $("#upload-progress");
      var hiddenFile = $("#hidden_attach_file");
      var doc_type = $("#doc_type");
      var output = $("#output");
      var u_picture = $("#u_picture");

      browseFile.on('change', function(e) {

        e.preventDefault();
        uploadData = new FormData(form[0]);

        $.ajax({
          url: '<?php echo base_url('index.php/'); ?>admin/station/do_upload',
          type: form.attr('method'),
          dataType: 'json',
          cache: false,
          contentType: false,
          processData: false,
          data: uploadData,
          beforeSend: function() {
            hiddenFile.val('');
            doc_type.val('');
            output.html('');
            progress.removeClass('hide').html('<i class="fa fa-cog fa-spin"></i> Loading..');
            u_picture.addClass('hide');
          },
          success: function(data) {
            progress.addClass('hide');
            if (data.status == false) {
              output.html(data.exception).addClass('alert-danger').removeClass('hide').removeClass('alert-info');
            } else if (data.status == true) {
              output.html(data.message).addClass('alert-info').removeClass('hide').removeClass('alert-danger');
              hiddenFile.val(data.filepath);
              doc_type.val(data.filetype);
              u_picture.attr('src', '<?php echo base_url('index.php/'); ?>' + data.filepath).removeClass('hide');
            }
          },
          error: function() {
            progress.addClass('hide');
            output.addClass('hide');
            alert('failed!');
          }
        });
      });

      $("#country").change(function() {
        // var acc_group = $("#acc_group");
        // var error = $('#error');
        // var acc_email_div = $('#acc_email_div');
        // var acc_password_div = $('#acc_password_div');
        var state = $('#state');
        $.ajax({
          url: '<?php echo base_url('index.php/'); ?>admin/property/get_states',
          type: 'post',
          dataType: 'JSON',
          data: {
            'ci_csrf_token': '',
            country_id: $(this).val()
          },
          success: function(data) {
            console.log(data.states);
            if (data.status == true) {
              state.html(data.message);
              //error.html('Select account name').addClass('text-success').removeClass('text-danger');
            } else {
              state.html('');
              //error.html(data.message).addClass('text-danger').removeClass('text-success');
            }
            // if (data.status == true) {
            //     if (data.mode=='3') {
            //         console.log('Display Email And password field');
            //         $('#acc_email_div').show(1000);
            //         $('#acc_password_div').show(1000);
            //         // alert('client');
            //         // error.html(data.message).addClass('text-success').removeClass('text-danger');
            //     }else{
            //         console.log('Hide Email And password field');   
            //         $('#acc_email_div').hide(1000);
            //         $('#acc_password_div').hide(1000);
            //         // alert('Not Client');
            //         // error.html(data.message).addClass('text-danger').removeClass('text-success');
            //     }
            //     // error.html(data.);
            // } else {
            //     error.html(data.message).addClass('text-danger').removeClass('text-success');
            // }
          },
          error: function() {
            alert('failed');
          }
        });
      });

      $("#state").change(function() {
        var city = $('#city');
        $.ajax({
          url: '<?php echo base_url('index.php/'); ?>admin/property/get_city',
          type: 'post',
          dataType: 'JSON',
          data: {
            'ci_csrf_token': '',
            state_id: $(this).val()
          },
          success: function(data) {
            console.log(data.states);
            if (data.status == true) {
              city.html(data.message);
              //error.html('Select account name').addClass('text-success').removeClass('text-danger');
            } else {
              city.html('');
              //error.html(data.message).addClass('text-danger').removeClass('text-success');
            }
            // if (data.status == true) {
            //     if (data.mode=='3') {
            //         console.log('Display Email And password field');
            //         $('#acc_email_div').show(1000);
            //         $('#acc_password_div').show(1000);
            //         // alert('client');
            //         // error.html(data.message).addClass('text-success').removeClass('text-danger');
            //     }else{
            //         console.log('Hide Email And password field');   
            //         $('#acc_email_div').hide(1000);
            //         $('#acc_password_div').hide(1000);
            //         // alert('Not Client');
            //         // error.html(data.message).addClass('text-danger').removeClass('text-success');
            //     }
            //     // error.html(data.);
            // } else {
            //     error.html(data.message).addClass('text-danger').removeClass('text-success');
            // }
          },
          error: function() {
            alert('failed');
          }
        });
      });
    });
  </script>
  <!-- content END -->