@php
$include_param = [
	"title" 	=> $title,
	"css" 		=> "documents/index",
];

@endphp

@include{("_include/header", $include_param)}

	<h1>{{$title}}</h1>

	<h2>Introduction</h2>
	<p>Write PHP code simpler, similar to Laravel blade format by include only one file (Raku.phar).</p>
	<h3>Folders structure</h3>
	<div class="border border-primary">
		<pre>
			<table class="table-hover">
				<tr>
					<td>RakuSampleProject</td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----build</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----Raku.phar</td>
					<td><font color="red"><b>(Important)</b></font></td>
					<td>&lt;= Raku package is here. And copy it to your project.</td>
				</tr>

				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----storage</td>
					<td></td>
					<td>Its sub-folders must be <b>writable</b></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----cached</td>
					<td><font color="red"><b>(Required)</b></font></td>
					<td>&lt;= Cache files stay here. And be <b>writable</b></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----log</td>
					<td></td>
					<td>&lt;= Logged files stay here.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----tmp</td>
					<td></td>
					<td>&lt;= Temporary files stay here.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----src</td>
					<td></td>
					<td>&lt;= This folder is for PHP files.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----index.php</td>
					<td></td>
					<td>&lt;= Default index file</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----js</td>
					<td><font color="#e0e1e2">(Optional)</font></td>
					<td>&lt;= JavaScript folder.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----css</td>
					<td><font color="#e0e1e2">(Optional)</font></td>
					<td>&lt;= CSS folder.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----view</td>
					<td></td>
					<td>&lt;= This folder is for keeping view/template code. It is the View in MVC model.</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----index.raku.php</td>
					<td></td>
					<td>&lt;= Default template file of `/view/index.php` file</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>

				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|----shortcode</td>
					<td><font color="#e0e1e2">(Optional)</font></td>
					<td>&lt;= Component folder, or any custom php code here</td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;|----sample.php</td>
					<td><font color="#e0e1e2">(Optional)</font></td>
					<td></td>
				</tr>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</pre>

	</div>
	<br><br>

	<h2>Installation</h2>
	<p>
		<ol>
			<li>Download <strong>Raku.phar</strong></li>
			<li>Copy <strong>Raku.phar</strong> into your project folder.</li>
			<li>Include it in any file you want to use.</li>
			<li>Create `<strong>storage/cache</strong>`.</li>
			<li>Change permission for `<strong>storage/cache</strong>` folder to be <strong>writable</strong>.</li>
			<li>In CentOS: <code>chmod -R 777 storage</code></li>
		</ol>
	</p>
	<p>
		<h3>Sample code</h3>
		Example: src/index.php
		<br>
		<pre class="border border-primary">define("RAKU_TEMPLATE_PATH", "../view/");

define("RAKU_CACHE_PATH", "../storage/cache/");

include_once("../build/Raku.phar");

$raku = new Raku();

$title = "Simple Coding";

$data = ["title" => $title];

$raku->view('index', $data); // &lt= Do not put extension (".raku.php") in template file name.
</pre>
	</p>

	<br>
	<h2>Sample code for view/template</h2>
	<table class="table table-bordered table-striped table-hover table-condensed ">
		<thead>
			<tr class="">
				<th>Item</th>
				<th>Code</th>
				<th>Value/Output</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>String</td>
				<td>
					<code>
						@{{$link1}}
					</code>
				</td>
				<td>
					{{$link1}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
						@{!!$link1!!}
					</code>
				</td>
				<td>
					{!!$link1!!}
				</td>
			</tr>
			<tr>
				<td>Paragraph</td>
				<td>
					<code>
						@{{$p1}}
					</code>
				</td>
				<td>
					{{$p1}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
						@{!!$p1!!}
					</code>
				</td>
				<td>
					{!!$p1!!}
				</td>
			</tr>

			<tr>
				<td></td>
				<td>
					<code>
						@{{$p2}}
					</code>
				</td>
				<td>
					{{$p2}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
						@{!!$p2!!}
					</code>
				</td>
				<td>
					{!!$p2!!}
				</td>
			</tr>

			<tr>
				<td>Comment code</td>
				<td>
					<code>
						@{{--$title--}}
					</code>
				</td>
				<td>
					{{--$title--}}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
@{{--<br>
		&lt;ul&gt;<br>
		@@foreach{($arr as $key => $value)}<br>
			&lt;li&gt;@{{$key}} / @{{$value}}&lt;/li&gt;<br>
		@@endforeach<br>
		&lt;/ul&gt;<br>
	--}}
					</code>
				</td>
				<td>
{{--
		<ul>
		@foreach{($arr as $key => $value)}
			<li>{{$key}} / {{$value}}</li>
		@endforeach
		</ul>
	--}}
				</td>
			</tr>

			<tr>
				<td>hr</td>
				<td>
					<code>
						@@hr{(&quot;red&quot;)}<br>
						@@hrRed<br>
						@@hr{('#339900')}<br>
						@@hrGreen<br>
						@@hr{('#007bff')}<br>
						@@hrBlue<br>
						@@hrYellow<br>
						@@hr{('#9900ff')}<br>
						@@hrPurple<br>
						@@hr<br>
						@@hrWhite<br>
						&lt;b&gt;Escape ↓&lt;/b&gt;<br>
						@@@hr{(&quot;red&quot;)}<br>
						@@@@hr{('#339900')}<br>
						@@@hr
					</code>
				</td>
				<td>
						@hr{("red")}
						@hrRed
						@hr{('#339900')}
						@hrGreen
						@hr{('#007bff')}
						@hrBlue
						@hrYellow
						@hr{('#9900ff')}
						@hrPurple
						@hr
						@hrWhite
						<b>Escape ↓</b><br>
						@@hr{("red")}<br>
						@@hr{('#339900')}<br>
						@@hr

				</td>
			</tr>
			<tr>
				<td>LINK/html tag</td>
				<td>
					<code>
&lt;a href="@{{$link1}}"&gt;@{{$link1}}&lt;/a&gt;<br>
&lt;a href="@{!!$link1!!}"&gt;@{!!$link1!!}&lt;/a&gt;<br>
@@if{(isset($link2))}<br>
@{{$link2}}<br>
@@else<br>
&lt;i&gt;$link2 was not defined.&lt;/i&gt;<br>
@@endif
<br>
@{{isset($link2) ? $link2 : 'Undefined...'}}
					</code>
				</td>
				<td>
<a href="{{$link1}}">{{$link1}}</a><br>
<a href="{!!$link1!!}">{!!$link1!!}</a><br>
@if{(isset($link2))}
{{$link2}}
@else
<i>$link2 was not defined.</i>
@endif
<br>
{{isset($link2) ? $link2 : 'Undefined...'}}

				</td>
			</tr>


			<tr>
				<td>Foreach</td>
				<td>
					<code>
						&lt;ul&gt;
						<br>
						@@foreach{($list as $key => $value)}<br>
							@@if{(is_string($value))}<br>
							&lt;li&gt;@{{$key}} / @{{$value}}&lt;/li&gt;<br>
							@@endif<br>
						@@endforeach<br>
						&lt;/ul&gt;
					</code>
				</td>
				<td>
					<ul>
					@foreach{($list as $key => $value)}
						@if{(is_string($value))}
							<li>{{$key}} / {{$value}}</li>
						@endif
					@endforeach
					</ul>
				</td>
			</tr>

			<tr>
				<td>Array</td>
				<td>
					<code>
						@@if{(is_string($arr))}<br>
							@{{$arr}}<br>
						@@elseif{(is_array($arr))}<br>
							&lt;i&gt;This is an array&lt;/i&gt;<br>
						@@endif
					</code>
				</td>
				<td>
					@if{(is_string($arr))}
						{{$arr}}
					@elseif{(is_array($arr))}
						<i>This is an array</i>
					@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>@{{ d($arr) }}</code>
				</td>
				<td>
					{{ d($arr) }}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>@@d{($arr)}</code>
				</td>
				<td>
					@d{($arr)}
				</td>
			</tr>

			<tr>
				<td>IF ELSE</td>
				<td>
					<code>
						@@if{((true) || (true))}<br>
						-&gt; This is TRUE;<br>
						@@endif
					</code>
				</td>
				<td>
					@if{((true) || (true))}
					-&gt; This is TRUE;
					@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
	@@if{((false) || (false))}<br>
	-&gt; This is FALSE (NO output);<br>
	@@elseif{((true) || (true))}<br>
	-&gt; else if TRUE<br>
	@@endif
					</code>
				</td>
				<td>
	@if{((false) || (false))}
	-&gt; This is FALSE (NO output);
	@elseif{((true) || (true))}
	-&gt; else if TRUE
	@endif
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>
	@@if{(false)}<br>
	-&gt; This is FALSE (NO output);<br>
	@@else<br>
	-&gt; else TRUE<br>
	@@endif
					</code>
				</td>
				<td>
	@if{(false)}
	-&gt; This is FALSE (NO output);
	@else
	-&gt; else TRUE
	@endif
				</td>
			</tr>

			<tr>
				<td>Include other views (raku file)</td>
				<td>
					<code>@@include{('documents/test1')}</code>
				</td>
				<td>
					@include{('documents/test1')}
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<code>@@d{($json_string)}&lt;br&gt;&lt;br&gt;<br>
					@@include{(<br>
					&nbsp;&nbsp;&nbsp;&nbsp;'sub1/test1', [<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"json_string" 		=> $json_string,<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"line2" 			=> "Line 2",<br>
					&nbsp;&nbsp;&nbsp;&nbsp;])}</code>
				</td>
				<td>
					@d{($json_string)}<br><br>
					@include{('sub1/test1', [
							"json_string" 		=> $json_string,
							"line2" 			=> "Line 2",
					])}
				</td>
			</tr>

			<tr>
				<td>ShortCode</td>
				<td>
					<code>@@shortcode{('sample')}</code>
				</td>
				<td>
					@shortcode{('sample')}
				</td>
			</tr>

			<tr>
				<td>@@php</td>
				<td>
					<code>@@php echo "this is @@@php tag"; @@endphp</code>
				</td>
				<td>
					@php echo "this is @@php tag"; @endphp
				</td>
			</tr>
			<tr>
				<td>@assign</td>
				<td>
					<code>@@assign{($assign, "Hello")}
						<br>
						@{{$assign}}
					</code>
				</td>
				<td>
					@assign{($assign, "Hello")}
					{{$assign}}
				</td>
			</tr>
			<tr>
				<td>js test</td>
				<td>
					<code>
						&ltscript src="/js/index.js"&gt;&lt/script&gt;
						<br><br>

						&lt;button type="button" id="btnJsTest" class="btn btn-dark"&gt;Toggle&lt;/button&gt;
						&nbsp;&nbsp;<br>
						&lt;span id="spanJsTest"&gt;JS Test&lt;/span&gt;

					</code>
				</td>
				<td>
					<button type="button" id="btnJsTest" class="btn btn-dark">Toggle</button>
					&nbsp;&nbsp;
					<span id="spanJsTest">JS Test</span>
				</td>
			</tr>
			<tr>
				<td>CSS test</td>
				<td>
					<code>
						&lt;link rel="stylesheet" href="/css/documents/index.css"&gt;
						<br><br>
						&lt;button type="button" class="sample-button"&gt;CSS button&lt;/button&gt;
					</code>
				</td>
				<td>
					<button type="button" class="sample-button">CSS button</button>
				</td>
			</tr>
			<tr>
				<td>Image</td>
				<td>
					<code>

						&lt;img src="/img/logo.png" alt="@{{$title}}"&gt;
					</code>
				</td>
				<td>
					<img src="/img/logo.png" alt="{{$title}}">
				</td>
			</tr>

			<tr>
				<td>Escape tag: @</td>
				<td>
					<code>
						@@{{ $title }}&lt;br&gt;<br>
						@@@d{($title)}&lt;br&gt;<br>
						@@@hr&lt;br&gt;<br>
						@@@@hrRed&lt;br&gt;<br>
						@@@include{('documents/test1')}&lt;br&gt;<br>
					</code>
				</td>
				<td>
					@{{ $title }}<br>
					@@d{($title)}<br>
					@@hr<br>
					@@hrRed<br>
					@@include{('documents/test1')}<br>
				</td>
			</tr>

		</tbody>
	</table>

	<script src="/js/index.js"></script>

@include{("_include/footer")}
