@extends('layouts.entry')

@section('content')


<div class="row mb-md">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="ul-alert d-flex align-items-center">
                    <div class="ul-alert-icon"><i class="material-icons text-warning mr-md text-35">warning </i></div>
                    <div class="ul-alert-p">Bootstrap Tagify-lightweight input tags plugin.For more info please visit
                        the plugin's <a class="btn btn-link btn-link-primary m-0"
                            href="https://yaireo.github.io/tagify/">Demo Page</a> or <a
                            class="btn btn-link btn-link-primary m-0" href="https://github.com/yairEO/tagify">Github
                            Repo</a>.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<h2 class="doc-section-title" id="form-control">Bootstrap Tagify<a class="section-link" href="#form-control"></a></h2>
<div class="doc-example">
    <div class="row">
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="tagify-item">
                <input name="basicBootstrapTagify" value="tag1, tag2" />
            </div>
        </div>
        <div class="col-md-12 col-lg-4 mb-md">
            <div class="tagify-item"><input name='bootstrap-tagify-dropdown' class='some_class_name '
                    placeholder='write some tags' value='css, html, javascript'> </div>
        </div>
    </div>
</div>
<div class="copy-code">
    <button class="btn btn-sm btn-primary btn-clipboard" data-toggle="tooltip" data-placement="top"
        title="Copy to clipboard">Copy</button>
</div><code class="code" data-code="&lt;!-- Basic --&gt;
&lt;div class=&quot;tagify-item&quot;&gt;
&lt;input class=&quot;&quot; name=&quot;basicBootstrapTagify&quot; value=&quot;tag1, tag2&quot;&gt;
&lt;/div&gt;


&lt;script&gt;
// The DOM element you wish to replace with Tagify
var basicBootstrapTagify = document.querySelector(&quot;input[name=basicBootstrapTagify]&quot;);
// init Tagify script on the above inputs
new Tagify(basicBootstrapTagify)
&lt;/script&gt;

&lt;!--Dropdown--&gt;
&lt;div class=&quot;tagify-item&quot;&gt;
&lt;input name=&quot;bootstrap-tagify-dropdown&quot; class=&quot;some_class_name&quot; placeholder=&quot;write some tags&quot; value=&quot;css, html, javascript&quot;&gt;
&lt;/div&gt;


&lt;script&gt;
var input = document.querySelector(&quot;input[name=&quot;bootstrap-tagify-dropdown&quot;]&quot;),
// init Tagify script on the above inputs
tagify = new Tagify(input, {
whitelist: [&quot;A# .NET&quot;, &quot;A# (Axiom)&quot;, &quot;A-0 System&quot;, &quot;A+&quot;, &quot;A++&quot;, &quot;ABAP&quot;, &quot;ABC&quot;, &quot;ABC ALGOL&quot;, &quot;ABSET&quot;, &quot;ABSYS&quot;, &quot;ACC&quot;, &quot;Accent&quot;, &quot;Ace DASL&quot;, &quot;ACL2&quot;, &quot;Avicsoft&quot;, &quot;ACT-III&quot;, &quot;Action!&quot;, &quot;ActionScript&quot;, &quot;Ada&quot;, &quot;Adenine&quot;, &quot;Agda&quot;, 
&quot;Agilent VEE&quot;, &quot;Agora&quot;, &quot;AIMMS&quot;, &quot;Alef&quot;, &quot;ALF&quot;, &quot;ALGOL 58&quot;, &quot;ALGOL 60&quot;, &quot;ALGOL 68&quot;, &quot;ALGOL W&quot;, &quot;Alice&quot;, &quot;Alma-0&quot;, &quot;AmbientTalk&quot;, &quot;Amiga E&quot;, &quot;AMOS&quot;, &quot;AMPL&quot;, &quot;Apex (Salesforce.com)&quot;, &quot;APL&quot;, &quot;AppleScript&quot;, &quot;Arc&quot;, &quot;ARexx&quot;, &quot;Argus&quot;, &quot;AspectJ&quot;, &quot;Assembly language&quot;, &quot;ATS&quot;, &quot;Ateji PX&quot;, &quot;AutoHotkey&quot;, &quot;Autocoder&quot;, &quot;AutoIt&quot;, &quot;AutoLISP / Visual LISP&quot;, &quot;Averest&quot;, &quot;AWK&quot;, &quot;Axum&quot;,
&quot;Active Server Pages&quot;, &quot;ASP.NET&quot;, &quot;B&quot;, &quot;Babbage&quot;, &quot;Bash&quot;, &quot;BASIC&quot;, &quot;bc&quot;, &quot;BCPL&quot;, &quot;BeanShell&quot;, &quot;Batch (Windows/Dos)&quot;, &quot;Bertrand&quot;, &quot;BETA&quot;, &quot;Bigwig&quot;, &quot;Bistro&quot;, &quot;BitC&quot;, &quot;BLISS&quot;, &quot;Blockly&quot;, &quot;BlooP&quot;, &quot;Blue&quot;, &quot;Boo&quot;, &quot;Boomerang&quot;, &quot;Bourne shell (including bash and ksh)&quot;, &quot;BREW&quot;, &quot;BPEL&quot;, &quot;B&quot;, &quot;C--&quot;, &quot;C++ – ISO/IEC 14882&quot;, &quot;C# – ISO/IEC 23270&quot;, &quot;C/AL&quot;, &quot;Caché ObjectScript&quot;, &quot;C Shell&quot;, 
&quot;Caml&quot;, &quot;Cayenne&quot;, &quot;CDuce&quot;, &quot;Cecil&quot;, &quot;Cesil&quot;, &quot;Céu&quot;, &quot;Ceylon&quot;, &quot;CFEngine&quot;, &quot;CFML&quot;, &quot;Cg&quot;, &quot;Ch&quot;, &quot;Chapel&quot;, &quot;Charity&quot;, &quot;Charm&quot;, &quot;Chef&quot;, &quot;CHILL&quot;, &quot;CHIP-8&quot;, &quot;chomski&quot;, &quot;ChucK&quot;, &quot;CICS&quot;, &quot;Cilk&quot;, &quot;Citrine (programming language)&quot;, &quot;CL (IBM)&quot;, &quot;Claire&quot;, &quot;Clarion&quot;, &quot;Clean&quot;, &quot;Clipper&quot;, &quot;CLIPS&quot;, &quot;CLIST&quot;, &quot;Clojure&quot;, &quot;CLU&quot;, &quot;CMS-2&quot;, &quot;COBOL – ISO/IEC 1989&quot;, &quot;CobolScript – COBOL Scripting language&quot;, &quot;Cobra&quot;, &quot;CODE&quot;, &quot;CoffeeScript&quot;, &quot;ColdFusion&quot;, &quot;COMAL&quot;, &quot;Combined Programming Language (CPL)&quot;, &quot;COMIT&quot;, &quot;Common Intermediate Language (CIL)&quot;, 
&quot;Common Lisp (also known as CL)&quot;, &quot;COMPASS&quot;, &quot;Component Pascal&quot;, &quot;Constraint Handling Rules (CHR)&quot;, &quot;COMTRAN&quot;, &quot;Converge&quot;, &quot;Cool&quot;, &quot;Coq&quot;, &quot;Coral 66&quot;, &quot;Corn&quot;, &quot;CorVision&quot;, &quot;COWSEL&quot;, &quot;CPL&quot;, &quot;CPL&quot;, &quot;Cryptol&quot;, &quot;csh&quot;, &quot;Csound&quot;, &quot;CSP&quot;, &quot;CUDA&quot;, &quot;Curl&quot;, &quot;Curry&quot;, &quot;Cybil&quot;, &quot;Cyclone&quot;, &quot;Cython&quot;, &quot;Java&quot;, &quot;Javascript&quot;, &quot;M2001&quot;, &quot;M4&quot;, &quot;M#&quot;, &quot;Machine code&quot;, &quot;MAD (Michigan Algorithm Decoder)&quot;, &quot;MAD/I&quot;, &quot;Magik&quot;, &quot;Magma&quot;, &quot;make&quot;, &quot;Maple&quot;, &quot;MAPPER now part of BIS&quot;, &quot;MARK-IV now VISION:BUILDER&quot;, &quot;Mary&quot;, &quot;MASM Microsoft Assembly x86&quot;, &quot;MATH-MATIC&quot;, &quot;Mathematica&quot;,
&quot;MATLAB&quot;, &quot;Maxima (see also Macsyma)&quot;, &quot;Max (Max Msp – Graphical Programming Environment)&quot;, &quot;Maya (MEL)&quot;, &quot;MDL&quot;, &quot;Mercury&quot;, &quot;Mesa&quot;, &quot;Metafont&quot;, &quot;Microcode&quot;, &quot;MicroScript&quot;, &quot;MIIS&quot;, &quot;Milk (programming language)&quot;, &quot;MIMIC&quot;, &quot;Mirah&quot;, &quot;Miranda&quot;, &quot;MIVA Script&quot;, &quot;ML&quot;, &quot;Model 204&quot;, &quot;Modelica&quot;, &quot;Modula&quot;, &quot;Modula-2&quot;, &quot;Modula-3&quot;, &quot;Mohol&quot;, &quot;MOO&quot;, &quot;Mortran&quot;, &quot;Mouse&quot;, &quot;MPD&quot;, &quot;Mathcad&quot;, &quot;MSIL – deprecated name for CIL&quot;, &quot;MSL&quot;, &quot;MUMPS&quot;, &quot;Mystic Programming L&quot;],
maxTags: 10,
dropdown: {
maxItems: 20,           
classname: &quot;tags-look&quot;, 
enabled: 0,             
closeOnSelect: false    
}
})

&lt;/script&gt;"></code>




@endsection