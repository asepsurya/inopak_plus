<div>
<div style="background-color: #1e1e1e; color: #d4d4d4; font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;">
<br>
<div>
<span style="color: #569cd6;">CREATE</span> <span style="color: #569cd6;">TABLE</span> <span style="color: #569cd6;">IF</span> <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">EXISTS</span> <span style="color: #ce9178;">`filepdf`</span> (</div>
<div>
<span style="color: #ce9178;">`id`</span> <span style="color: #569cd6;">int</span>(<span style="color: #b5cea8;">11</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span> AUTO_INCREMENT,</div>
<div>
<span style="color: #ce9178;">`judul`</span> <span style="color: #569cd6;">varchar</span>(<span style="color: #b5cea8;">255</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div>
<div>
<span style="color: #ce9178;">`jenis`</span> enum(<span style="color: #ce9178;">'Peraturan Pemerintah'</span>,<span style="color: #ce9178;">'Peraturan Presiden'</span>,<span style="color: #ce9178;">'Keputusan Menteri'</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div>
<div>
<span style="color: #ce9178;">`namafile`</span> <span style="color: #569cd6;">varchar</span>(<span style="color: #b5cea8;">100</span>) <span style="color: #569cd6;">NOT</span> <span style="color: #569cd6;">NULL</span>,</div>
<div>
<span style="color: #569cd6;">PRIMARY</span> <span style="color: #569cd6;">KEY</span> (<span style="color: #ce9178;">`id`</span>)</div>
<div>
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=<span style="color: #b5cea8;">2</span> ;</div>
<br>
<div>
<span style="color: #6a9955;">--</span></div>
<div>
<span style="color: #6a9955;">-- Dumping data for table `filepdf`</span></div>
<div>
<span style="color: #6a9955;">--</span></div>
<br>
<div>
<span style="color: #569cd6;">INSERT</span> <span style="color: #569cd6;">INTO</span> <span style="color: #ce9178;">`filepdf`</span> (<span style="color: #ce9178;">`id`</span>, <span style="color: #ce9178;">`judul`</span>, <span style="color: #ce9178;">`jenis`</span>, <span style="color: #ce9178;">`namafile`</span>) <span style="color: #569cd6;">VALUES</span></div>
<div>
(<span style="color: #b5cea8;">1</span>, <span style="color: #ce9178;">'KAWASAN EKONOMI KHUSUS TANJUNG KELAYANG'</span>, <span style="color: #ce9178;">'Peraturan Pemerintah'</span>, <span style="color: #ce9178;">'kawasanekonomi'</span>);</div>
</div>
</div>