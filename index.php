<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Karma: A Data Integration Tool</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="usc,isi,karma,data integration tool,knoblock,pedro">
    <meta name="author" content="Animesh Manglik">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
                                   <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>

  <body>

    <div class="navbar navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" >Karma</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<%= 'active' if params[:controller] == 'yourdefaultcontroller' %>"><a href="#">Home</a></li>
              <li class="<%= 'active' if params[:controller] == 'team' %>"><a href="#team">Team</a></li>
              <li class="<%= 'active' if params[:controller] == 'publication' %>"><a href="#publication">Publications</a></li>
            </ul>
            <ul class="nav pull-right">
            <li><a href="http://www.isi.edu">Information Sciences Institute, University of Southern California</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  <div id="wrap">

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
    <div id="home"></div>  
      <div class="hero-unit">
        <h1>Karma</h1>
        <h3>A Data Integration Tool</h3>
        <div id="download">
      <p class="">Karma is available as open source (Apache 2 License)
      <a href="https://github.com/InformationIntegrationGroup/Web-Karma" class="btn btn-primary">Download &raquo;</a></p>
      <p class="notice">Notice (Oct 5, 2013): we replaced Web-Karma-Public with Web-Karma. Please download the new repository.</p>
      </div>
      </div>
	 
  
  
      <!-- Example row of columns -->
      <div class="row">
        	<div class="span12">
					<div class="row">
							<div class ="span8">
									<div class="another-container">
											<div class="video">
												<iframe src="http://www.youtube.com/embed/kUIqTI56oeQ" allowfullscreen></iframe>
											</div>
									</div>
							</div>
							<div class="span4">
							<p class="text-info">Principal Investigators</p>
									<ul class="thumbnails space">
								       <li class="span2">
										  <div class="thumbnail"><a href="http://www.isi.edu/~knoblock/">
											  <img src="assets/img/staff/craig.jpeg" alt=">Craig Knoblock"></a>
											  <div class="caption">
											  <h5>Craig Knoblock</h5>
											  </div>
											  </div>
											  </li>
									   <li class="span2">
										  <div class="thumbnail"><a href="http://www.isi.edu/~szekely/">
											  <img src="assets/img/staff/pedro.jpeg" alt="Pedro Szekely"></a>
											  <div class="caption">
											  <h5>Pedro Szekely</h5>
											  </div>
											  </div>
											  </li>
							           </ul>
							</div>
					</div>
					<div class="row">
							<div class="span12">
         <p class="justify">Karma is an information integration tool that enables users to quickly and easily integrate data from a variety of data sources including databases, spreadsheets, delimited text files, XML, JSON, KML and Web APIs. Users integrate information by modeling it according to an ontology of their choice using a graphical user interface that automates much of the process. Karma learns to recognize the mapping of data to ontology classes and then uses the ontology to propose a model that ties together these classes. Users then interact with the system to adjust the automatically generated model. During this process, users can transform the data as needed to normalize data expressed in different formats and to restructure it. Once the model is complete, users can published the integrated data as RDF or store it in a database.</p>

        <!-- <p>A cool video that illustrates why Karma is significant: <a href="http://www.youtube.com/watch?v=N2zK3sAtr-4&amp;feature=youtu.be">Data Sharing and Management Snafu in 3 Short Acts</a></p> -->
            <p class="justify">All the project publications are <a href="#publication">here</a>. The best paper on the technical aspects of Karma is our <a href="http://www.isi.edu/integration/papers/knoblock12-eswc.pdf">ESWC'2012 paper</a> (<a href="javascript:showBib('knoblock12:eswc')">bibtex</a>), and the best application paper is our <a href="http://www.isi.edu/~szekely/contents/papers/2013/eswc-2013-saam.pdf">ESWC'2013 paper</a> (<a href="javascript:showBib('Szekely:2013vq')">bibtex</a>), which received the best in-use paper award at the conference.</p>
                                
        					</div>  
					</div>
        
        
      </div>
      
      </div>
      <div class="row">
        <div class="span8">
          <h2>Karma Innovations</h2>
          
<h4>Ease of use:</h4> <p class="justify">Karma uses programming-by-example, learning techniques and a Steiner tree optimization algorithm to automate as much of the process as possible to enable end-users to map their data to a chosen ontology. Users adjust the automatically generated model using a graphical user interface and never see the complex mapping rules used in other systems.</p><p>
<h4>Hierarchical sources:</h4><p class="justify"> Many systems have been developed to map tabular sources to ontologies. Karma is unique in that it also supports hierarchcal data sources such as XML, JSON and KML.</p><p>
<h4>Web APIs:</h4><p class="justify"> In addition to static sources (databases and files), Karma supports data integration from Web APIs, enabling users to leverage the thousands of data sources that are available today via Web APIs.</p><p>
<h4>Semantic models:</h4><p class="justify"> Karma uses ontologies as a basis for integrating infomation, leveraring the class and property hierarchies, domain and range information and other ontology constructs to help users integrate their data. Karma allows users to combine multiple ontologies to enable users to map their data to standard vocabularies.</p><p>
<h4>Scalable processing:</h4><p class="justify"> Users work with a subset of their data to define the models that integrate their data sources. This enables Karma to offer a responsive user interface when users are defining the model that integrates their data. Karma can then use these models in batch mode to integrate large data sources.</p><p>
<h4>Data transformations:</h4><p class="justify"> Karma offers a programming-by-example interface to enable users to define data transformation scripts that transform data expressed in multiple data formats into a common format.</p>
        </div>   
        
               <div class="span4">
  <div id="news">
  <!--
  <p align="center"><a align="center" href="https://twitter.com/KarmaSemWeb" class="twitter-follow-button" data-show-count="false">Follow @KarmaSemWeb</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
-->


<!-- Show @KarmaSemWeb tweets -->
<a class="twitter-timeline" data-dnt=true href="https://twitter.com/KarmaSemWeb" data-widget-id="270307372130504704">Tweets by @KarmaSemWeb</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  </div>

<!-- https://twitter.com/about/resources/widgets/widget_search -->
<!--
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: '#VIVO12 karma',
  interval: 30000,
  title: 'Karma',
  subject: 'Karma #VIVO12',
  width: 300,
  height: 400,
  theme: {
    shell: {
      background: '#f0f0f0',
      color: '#000000'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#919191'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
-->  
      </div>    
      </div>
      
      
      

	  <div class="row">
        <div class="span8">
          <h2>Case Studies</h2>
          <h3>Integration of Bio-Informatics Data</h3>
          <p>We used Karma to replicate the mappings done in a scenario from the Semantic MediaWiki Linked Data Extension (SMW-LDE) work [<a href="http://www.wiwiss.fu-berlin.de/en/institute/pwo/bizer/research/publications/BeckerBizerErdmannGreaves-SMW-LDE-Poster-ISWC2010.pdf">Becker et al.</a>] where researchers integrated ABA, Uniprot, KEGG Pathway, PharmGKB and Linking Open Drug Data datasets by mapping them to a common ontology. Papers: <a href="http://www.isi.edu/integration/papers/knoblock12-eswc.pdf" target="_blank">ESWC'2012</a>, <a href="http://www.isi.edu/integration/papers/knoblock11-lisc.pdf" target="_blank">ISWC'2011 Linked Science.</a> </p>
        </div>       
      </div>


	   <div class="row">
        <div class="span8">
          <h2>Mapping USC Faculty Data to VIVO</h2>
          <p><a href="http://vivoweb.org/">VIVO</a> is a system to build researcher networks across institutions. In this case study we used Karma to map data about USC faculty to the VIVO ontology and to publish the data in the RDF format that the VIVO system can ingest. Karma enables users to ingest data in VIVO by interacting with an easy to use graphical user interface, and does not require knowledge of SPARQL or other Web languages such as XSLT or XQuery. The video shows how to ingest the sample files provided in the <a href="http://www.vivoweb.org/data-ingest-guide">VIVO Data Ingest Guide.</a></p>
<p>Karma at the VIVO'2012 Conference in Miami, Florida: Abstract (<a href="other-materials/vivo2012/Karma-Abstract-v2.pdf">PDF</a>), Slides (<a href="other-materials/vivo2012/2012-08-22-VIVO-Conference-Karma-v01.pptx">Powerpoint</a>), Ontology and datasets (<a href="other-materials/vivo2012/2012-08-22-VIVO-Conference-Demo-Files.zip">zip</a>) </p>
        </div>
        <div class="span4">
        <div class="video">
          <iframe src="http://www.youtube.com/embed/EQcMc4TrfuE"  allowfullscreen></iframe>
        </div>
       </div>        
      </div>

	     <div class="row">
        <div class="span8">
          <h2>Smithsonian American Art Museum</h2>
          <p class="justify">In this case study we used Karma to convert records of 44,000 of the museum’s holdings to Linked Open Data according to the <a href="http://www.europeana.eu/schemas/edm/">Europeana Data Model (EDM)</a>. The records are stored in several tables in a SQL Server database. Using Karma we modeled these tables in terms of the EDM ontology and converted the data into RDF. We are creating a 5-star Linked Data, linked to DBpedia, the Getty Union List of Artist Names (ULAN)® and the NY Times Linked Data. The USC <a href="http://universityofsoutherncalifornia.createsend1.com/t/ViewEmail/j/DEB74B7D328C85AA">press release</a>. Our paper on this work received the best in-use paper award at the ESWC'2013 conference: <a href="http://bit.ly/11X5YPo">paper</a>, <a href="http://slidesha.re/18vxMnn">slides</a>. The Linked Data is now deployed: each time you visit an artist page in the Smithsonian American Art Museum <a href="http://americanart.si.edu/collections/search/artist/?id=4253">web site</a>, a SPARQL query is issued to retrieve links to Wikipedia and the NY Times. </p>
          
        </div>
        <div class="span4">
        <div class="video">
         <!-- Keep ref to old image so we can use it elsewhere: <a href="assets/img/saam-graphic-v4-no-border-PNG.png"><img src="assets/img/saam-graphic-v4-no-border-PNG.png" alt="project"></a> -->
            <iframe src="//www.youtube.com/embed/1Vaytr09H1w" allowfullscreen></iframe>
        </div>
        </div>
      </div>

	  
	   <div class="row">
        <div class="span8">
          <h2>Geospatial Data and Services</h2>
          <p class="justify">In this case study we show how Karma could be used to help first responders plan evacuations of affected personnel in the event of a fire in an oil field. We used Karma to integrate <a href="http://www.conservation.ca.gov/dog/maps/Pages/GISMapping2.aspx">publicly available data about oil well</a> locations available in MS Excel format, data about personnel locations from a text file, information about the extent of the fire and the location of care centers from a KML file. In this example, no detailed road network information is available for the region in question, so our software extracted the road network data from a USGS map. In this case study we also show how Karma can invoke services that perform complex geospatial reasoning to 1) subtract from the road network the roads that intersect the region affected by the fire, 2) compute the shortest evacuation path for each person avoiding roads that go through the fire, and 3) perform a simulation of the likely spread of the fire based on wind conditions extracted from a public weather service. Users can perform the information integration tasks, invoke the services interactively and visualize the results on a map using Karma.</p>
        </div>
        <div class="span4">
        <div class="video">
          <iframe src="http://www.youtube.com/embed/nlYCjSppPMU"  allowfullscreen></iframe>
        </div>
       </div>      
      </div>

	     <div class="row">
        <div class="span12">
          <h2>Integration of Environmental Data</h2>
          <p class="justify">In this case study we used Karma to help an environmental scientists to construct a model of the metabolism of the Merced river in California. An important bottleneck that the scientists face is to prepare the data used to fit and run the models. In this case, data came from the California Data Exchange Center (<a href="water.ca.gov">CDEC</a>), the scientists' own sensors, and weather information from <a href="http://www.noaa.gov/">NOAA</a>. The CDEC and NOAA data was accessible via web services, and the scientists' data was available in CSV files. In addition, the data used different formats to represent dates, times and units, different time resolutions and contained errors. We used Karma to retrieve, clean, normalize, integrate and publish the data. Karma published the data in the format needed by the executable models, and produced semantic metadata that allowed the <a href="http://www.wings-workflows.org/">WINGS</a> workflow system to help users compose the different parts of the <a href="http://www.wings-workflows.org/node/17618">workflow</a>. In addition, Karma exported the data preparation procedures in a script that could be executed every day to produce fresh data. This allowed WINGS to automatically execute the workflow every day. Paper:  <a href="http://www.isi.edu/integration/papers/gil11-iswc.pdf">ISWC'2011</a>.</p>
        </div>      
      </div>
      
      
      <div class="row">
        <div class="span8">
          <h2>Rapidly Integrating Services into the Linked Data Cloud</h2>
          <p class="justify">The amount of data available in the Linked Data cloud continues to grow. Yet, few services consume and produce linked data. There is recent work that allows a user to define a linked service from an online service, which includes the specifications for consuming and producing linked data, but building such models is time consuming and requires specialized knowledge of RDF and SPARQL. We present a new approach that allows domain experts to rapidly create semantic models of services by demonstration in an interactive web-based interface. First, the user provides examples of the service request URLs. Then, the system automatically proposes a service model the user can refine interactively. Finally, the system saves a service specification using a new expressive vocabulary that includes lowering and lifting rules. This approach empowers end users to rapidly model existing services and immediately use them to consume and produce linked data. Paper: <a href="http://www.isi.edu/~szekely/contents/papers/2012/iswc2012_cameraready_34.pdf">ISWC'2012</a>.</p>
        </div>
        <div class="span4 pull-right">
        <div class="another-container">
        <div class="video">
          <iframe src="http://www.youtube.com/embed/3L1G5kh5jYg"  allowfullscreen></iframe>
        </div>
       </div>    
        </div>  
      </div>
<div id="team"></div>     
      <div class="row space" >
        <div class="span12">
          <h2>Team</h2>
	       <ul class="thumbnails space">
	       <li class="span2">
			  <div class="thumbnail"><a href="http://www.isi.edu/~knoblock/">
				  <img src="assets/img/staff/craig.jpeg" alt=">Craig Knoblock"></a>
				  <div class="caption">
				  <h5>Craig Knoblock</h5>
				  </div>
				  </div>
		</li>
		
		<li class="span2">
			  <div class="thumbnail"><a href="http://www.isi.edu/~szekely/">
				  <img src="assets/img/staff/pedro.jpeg" alt="Pedro Szekely"></a>
				  <div class="caption">
				  <h5>Pedro Szekely</h5>
				  </div>
				  </div>
		</li>
		
		<li class="span2">
		  <div class="thumbnail"><a href="http://www.isi.edu/~ambite/">
			  <img src="assets/img/staff/jose_ambite.jpg" alt="Jose Luis Ambite"></a>
			  <div class="caption">
			  <h5>Jose Luis Ambite</h5>
			  </div>
			  </div>
		</li>
		
		<li class="span2">
		  <div class="thumbnail"><a href="http://www.isi.edu/~shubhamg">
			  <img src="assets/img/staff/shubham.jpg" alt="Shubham Gupta"></a>
			  <div class="caption">
			  <h5>Shubham Gupta</h5>
			  </div>
			  </div>
	    </li>
	    
		<li class="span2">
		  <div class="thumbnail"> <a href="http://www.isi.edu/~mariam/">
			  <img src="assets/img/staff/maria.jpg" alt="Maria Muslea"></a>
			  <div class="caption">
			  <h5>Maria Muslea</h5>
			  </div>
			  </div>
	    </li>
	    
		<li class="span2">
		  <div class="thumbnail"><a href="http://www-scf.usc.edu/~taheriya/">
			  <img src="assets/img/staff/mohsen.jpg" alt="Mohsen Taheriyan"></a>
			  <div class="caption">
			  <h5>Mohsen Taheriyan</h5>
			  </div>
			  </div>
		</li>
		
		<li class="span2">
		  <div class="thumbnail"> <a href="http://www-scf.usc.edu/~wubo/">
			  <img src="assets/img/staff/bo.jpg" alt="Bo Wu"></a>
			  <div class="caption">
			  <h5>Bo Wu</h5>
			  &nbsp;
			  </div>
			  </div>
	    </li>
	    
			  
		<li class="span2">
          <div class="thumbnail"><a href="http://www.yoyoi.info/">
            <img src="assets/img/staff/yaoyi.jpg" alt="Yao-Yi Chiang"></a>
            <div class="caption">
              <h5>Yao-Yi Chiang</h5>
               </div>
			   </div>
        </li>
			  
			  
		<li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/vineet-gadodia/63/138/787/">
            <img src="assets/img/students/VG.jpg" alt="Vineet Gadodia"></a>
            <div class="caption">
              <h5>Vineet Gadodia</h5>
               </div>
			   </div>    
        </li>
    
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/mohammad-shaarif-zia/66/636/306">
            <img src="assets/img/students/shaarif.jpg" alt="Shaarif Zia"></a>
            <div class="caption">
              <h5>Shaarif Zia</h5>
              &nbsp;
               </div>
          </div>
          </li>
                  
     
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/hao-zhang/41/39a/74b">
            <img src="assets/img/students/Hao1.jpg" alt="Hao Zhang"></a>
            <div class="caption">
              <h5>Hao Zhang</h5>
               </div>
          </div>
          </li> 
      

          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/jianliang-chen/57/aa/1aa">
            <img src="assets/img/students/Jianliang.jpeg" alt="Jianliang Chen"></a>
            <div class="caption">
              <h5>Jianliang Chen</h5>
               </div>
			   </div>
        </li>
       
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/in/yutingliu1">
            <img src="assets/img/students/Liu.jpg" alt="Yuting Liu"></a>
            <div class="caption">
              <h5>Yuting Liu</h5>
              &nbsp;
               </div>
			   </div>
          </li>
          
          
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/shraddha-deshmukh/a/916/585">
            <img src="assets/img/students/Shraddha.jpg" alt="Shraddha Deshmukh"></a>
            <div class="caption">
              <h5>Shraddha Deshmukh</h5>
               </div>
			   </div>
        </li>
        
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/shrikanth-narayanan/30/145/904/">
            <img src="assets/img/students/Shrikanth1.jpg" alt="Shrikanth Narayanan"></a>
            <div class="caption">
              <h5>Shrikanth Narayanan</h5>
               </div>
			   </div>  
			   </li>
			   
        <li class="span2">
          <div class="thumbnail"><a href=" http://in.linkedin.com/pub/ayush-jaiswal/5b/589/29a/">
            <img src="assets/img/students/Ayush.jpg" alt="Ayush Jaiswal"></a>
            <div class="caption">
              <h5>Ayush Jaiswal</h5>
            </div>
          </div>
        </li>
 
 
          <li class="span2">
          <div class="thumbnail"><a href="http://cn.linkedin.com/pub/ying-zhang/53/545/b56">
            <img src="assets/img/students/Ying1.jpg" alt="Ying Zhang"></a>
            <div class="caption">
              <h5>Ying Zhang</h5>
               </div>
			   </div>
        </li>
        
          <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/animesh-manglik/14/6b2/97b">
            <img src="assets/img/students/ani.jpg" alt="Animesh Manglik"></a>
            <div class="caption">
              <h5>Animesh Manglik</h5>
               </div>
          </div>
          </li>
        <li class="span2">
          <div class="thumbnail"><a href="http://www.linkedin.com/pub/akshay-dani/9/549/683">
            <img src="assets/img/students/akshay.jpg" alt="Akshay Ramesh Dani"></a>
            <div class="caption">
              <h5>Akshay Ramesh Dani</h5>
               </div>
          </div>
          </li>
           <!-- 
        </li>
          <li class="span2">
          <div class="thumbnail">
            <img src="shoes2.jpg" alt="product 2">
            <div class="caption">
              <h5>Product detail</h5>
               </div>
          </div>
        -->
      </ul>

        </div>      
      </div>
      
<div id="publication"></div>  
	  <div class="row">
	  <div class="span12">
	  <h2>Publications</h2> 
	  

          
<?php
    $contents = file_get_contents("http://www.bibbase.org/show?bib=http://www.isi.edu/integration/karma/karma-bib.bib&groupby=year&proxy=1");
    print_r($contents);
  ?>
<br/> 

          
          
          
          
          
          
    <div id="footer">
      <div class="container">
        <p class="muted credit">This research is based upon work supported in part by the Smithsonian American Art Museum, the National Science Foundation under awards IIS-1117913 and CMMI-0753124, the NIH through the following NCRR grant: the Biomedical Informatics Research Network (1 U24 RR025736-01), the National Institutes of Health under grant number (1 UL1 RR031986-01), and Chevron Corp. under the joint project Center for Interactive Smart Oilfield Technologies (CiSoft), at the University of Southern California.</p>
      </div>
    </div>
    </div> <!-- /container -->
</div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
     <script src="assets/js/bootstrap-tooltip.js"></script>
     <script src="assets/js/bootstrap-popover.js"></script>
       <script src="http://www.bibbase.org/js/bibbase.js" type="text/javascript"></script>
           <script src="assets/js/bootstrap-dropdown.js"></script>
     <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>     
    <script src="assets/js/bootstrap-button.js"></script>   
    <script src="assets/js/bootstrap-typeahead.js"></script>
     <script src="assets/js/bootstrap-collapse.js"></script>

  <script src="http://www.bibbase.org/js/google_analytics.js" type="text/javascript"></script>
  <script charset="utf-8" 
	  type="text/javascript" 
	  src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/bib0d-20/8005/988928d1-4ba9-465b-91e6-b5496ef7f913">
  </script>
   
	<!--Javascript not used
	    <script src="assets/js/bootstrap-dropdown.js"></script>
     <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
	
    <script src="assets/js/bootstrap-scrollspy.js"></script>
   
    
    <script src="assets/js/bootstrap-alert.js"></script>
 --> 
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42422679-1', 'isi.edu');
  ga('send', 'pageview');

</script>
  </body>
</html>
