<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="kingster-breadcrumbs">
    <div class="kingster-breadcrumbs-container kingster-container">
        <div class="kingster-breadcrumbs-item kingster-item-pdlr"> <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Kingster." href="./home" class="home"><span
                        property="name">Home</span></a>
                <meta property="position" content="1">
            </span>&gt;<span property="itemListElement" typeof="ListItem">
                                <span property="name">
                                    Research
                                </span>
                                <meta property="position" content="2"></span>
                            &gt;<span property="itemListElement" typeof="ListItem">
                                <span property="name">
                                    Project Grants
                                </span>
        </div>
    </div>
</div>


<div class="kingster-page-wrapper" id="kingster-page-wrapper">
    <div class="kingster-content-container kingster-container">
        <div class=" kingster-sidebar-wrap clearfix kingster-line-height-0 kingster-sidebar-style-right">
            <div class="kingster-column kingster-line-height">
                <div class="gdlr-core-page-builder-body">
                    
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top gdlr-core-item-pdlr"
                                        style="padding-bottom: 35px ;">
                                        <div class="gdlr-core-title-item-title-wrap clearfix">
                                            

                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " style="font-size: 27px ;font-weight: 700 ;letter-spacing: 0px ;text-transform: none ;">
                                            Project Grants</h3>    
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Project grants/Agencies.." style="
                                
  background-image: url('/css/searchicon.png'); 
  background-position: 10px 12px;
  background-repeat: no-repeat; 
  width: 100%; 
  font-size: 16px; 
  padding: 12px 20px 12px 40px; 
  border: 1px solid #ddd; 
  margin-bottom: 12px; 
">
<script type="text/javascript">
        $(document).ready(function () {
           //Filter table
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
 });
</script>
                                
                                
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-text-box-item gdlr-core-item-pdlr gdlr-core-item-pdb gdlr-core-left-align" style="padding-bottom: 40px ;">
                                        <div class="gdlr-core-text-box-item-content" style="text-transform: none ;"><div style="overflow-x: auto;">
<table style="min-width: 600px;">
<thead>
<tr>
<th style="width:10%;">Sr. No.</th>
<th>Project Title</th>
<th style="width:10%;">PI/Co-PI</th>
<th style="width:10%;">Granting Agencies</th>
<th style="width:10%;">Year</th>
<th style="width:10%;">Institute</th>
<th style="width:10%;">LoA(Letter of Approval)</th>
</tr>
</thead>
<tbody id="myTable">
<tr>
<td>1</td>
<td>Test</td>
<td></td>
<td>DBT</td>
<td>2021</td>
<td>CSPIT</td>
<td><a href="">View</a></td>
</tr>
<tr>
<td>2</td>
<td>Test1</td>
<td></td>
<td>DST</td>
<td>2022</td>
<td>DEPSTAR</td>
<td><a href="">View</a></td>
</tr>

<tr>
<td>3</td>
<td>Test2</td>
<td></td>
<td>SERB</td>
<td>2021</td>
<td>DEPSTAR</td>
<td><a href="">View</a></td>
</tr>
</tbody>
</table>
</div>
</div></div>
                                </div>
                                
                                
                            </div>
                        </div>
                
                </div>
            </div>
            <!-- contact side bar -->
            
        </div>
    </div>
</div>
