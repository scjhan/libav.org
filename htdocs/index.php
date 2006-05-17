<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <title>FFmpeg</title>
</head>

<body bgcolor="#FFFFFF">

<center>
<img src=ffmpeg-logo-p1.jpg width="469" height="117" alt="FFmpeg"><br>
<img src=ffmpeg-logo-p2.jpg width="384" height="57" alt="Multimedia System">
</center>
<hr>


<?php require ('navbar.html'); ?>

 
<h2>News</h2>

<strong>(May 02, 2006)</strong> FFmpeg is participating in this year's
<a href="http://code.google.com/soc/">Google Summer of Code</a>.
If you are interested, check out the
<a href="http://wiki.multimedia.cx/index.php?title=FFmpeg_Summer_Of_Code">list of possible projects</a>
on MultimediaWiki.

<p>

<strong>(May 02, 2006)</strong> FFmpeg will be present at
<a href="http://www.linuxtag.org/2006/">LinuxtTag 2006</a>
with a few developers. Drop by the Free Video booth to meet us.

<p>

<strong>(October 16, 2005)</strong> Recent FFmpeg developments include a
native decoder for Duck TrueMotion 2 data. This decoder can handle data from
the popular <a href="http://www.mobygames.com/game/windows/final-fantasy-vii"><em>Final
Fantasy VII</em> game</a> (Windows port). As usual, check out
<a href="download.php">the latest CVS</a>.

<p>

<strong>(August 17, 2005)</strong> Due to the generous donations of all you
people we have ordered a new server for the project and will have it
running in a few weeks. Look at the
<a href="http://mplayerhq.hu/homepage/design7/news.html#server_thanks">MPlayer news page</a>
for details. Thank you!

<p>

<strong>(August 6, 2005)</strong> A few days ago the server of the
<a href="http://mplayerhq.hu/">MPlayer</a> project where FFmpeg is hosted had a
serious failure. We are now looking for donations to get a replacement
server and hosting place. If you wish to see FFmpeg continue to prosper,
please contribute. Look at the
<a href="http://mplayerhq.hu/homepage/design7/news.html#server_wanted">MPlayer news page</a>
for details.

<p>

<strong>(May 20, 2005)</strong> Notable recent developments:
<ul>
<li>FFmpeg has a <a href="http://www.fraps.com">Fraps
FPS1 video decoder</a>. This video codec has 3 different versions
and this new decoder supports the first 2 versions so far. Stay tuned
for updates.</li>
<li>The libavformat library features a native Ogg demuxer.</li>
<li>FFmpeg's VP3 decoder is implemented correctly. Further, the new Ogg
demuxer is capable of sending <a href="http://www.theora.org">Theora</a>
video packets to the VP3 for decoding. Put another way, FFmpeg supports
Theora video decoding.</li>
<li>FFmpeg now has its own native Vorbis audio decoder
implementation.</li>
</ul>

<strong>(May 5, 2005)</strong> You may have noticed that
<a href="http://www.apple.com/quicktime/">
Apple's QuickTime Player 7</a> is available for download. As of this writing,
the player is only available for Mac OS X, and the latest QuickTime files are
only viewable on that platform. That is, <strong>unless you are using an
FFmpeg-derived</strong>
multimedia application. Thanks to dedicated multimedia hackers from the FFmpeg
and <a href="http://www.videolan.org/x264.html">x264</a> projects, FFmpeg's
libavcodec can already decode the <em>next-generation (buzzword alert!)</em>
H.264 video codec data inside the latest Apple QuickTime files. Along with
the free, open source <a href="http://www.audiocoding.com/">FAAD AAC decoding
library (for the audio track)</a> and a competent QuickTime file demuxer, 
open source software is <strong>already equipped</strong> to handle
the <strong>newest multimedia files</strong> on the internet.

<p>
<em>You're welcome.</em> <img alt="smiley" src="smiley3.gif" />

<p>

<b>(Mar 6, 2005)</b>
FFmpeg now includes a native decoder for Apple's Lossless Audio Codec
(a.k.a. 'alac'). As usual, check out CVS.

<p>

<b>(Feb 28, 2005)</b>
At least 2 new features recently: Native decoder implementations of both 
the Shorten lossless audio codec and the LOCO video codec. Further, finally
added a link to Martin Boehme's FFmpeg API documentation that so many of you have
already located with search engines. See the <A HREF="documentation.php">documentation
page</A> for more information.

<p>

<b>(Feb 6, 2005)</b>
Added a new <a href="compat.php">compatibility page</a> to help users
understand which FFmpeg encoding options work best if they 
need to interoperate with certain proprietary multimedia players.

<p>

<b>(Jan 24, 2005)</b>
Eagle-eyed observers may have noticed the recent CVS addition of a VC-9
decoding implementation. It is still highly experimental but should eventually
serve as a basis for decoding Microsoft VC-1/VC-9/WMV3/WMV9 video data.

<p>

<b>(Dec 10, 2004)</b>
Here are some of the newest FFmpeg developments:
<ul>
<li>Creative ADPCM audio decoder
<li>Electronic Arts Multimedia (WVE/UV2/etc.) file demuxer
<li>Miro VideoXL (VIXL) video decoder
<li>H.261 video encoder
<li>QPEG video decoder
<li>Nullsoft Video (NSV) file demuxer
</ul>

As always, check the <a href="ffmpeg-doc.html">main FFmpeg doc</a> for a 
complete feature list, and the <a href="changelog.html">Changelog for recent
changes</a>.

<p>

<b>Looking for help?</b> Check out the <a href="mailinglists.php">mailing
lists</a>, and be sure to give us good troubleshooting information.

</p>

<h2>Project Description</h2>

<b>FFmpeg</b> is a complete solution to record, convert and stream
audio and video. It includes <b>libavcodec</b>, the leading
audio/video codec library. FFmpeg is developed under Linux, but it
can compiled under most operating systems, including Windows.

<p>The project is made of several components:
</p>

<ul>
<li><tt>ffmpeg</tt> is a command line tool to convert one video file
format to another. It also supports grabbing and encoding in real time
from a TV card.</li>

<li><tt>ffserver</tt> is an HTTP (RTSP is being developped) multimedia
streaming server for live broadcasts. Time shifting of live broadcast
is also supported.</li>

<li><tt>ffplay</tt> is a simple media player based on <a
href="http://www.libsdl.org/">SDL</a> and on the FFmpeg libraries.</li>

<li><tt>libavcodec</tt> is a library containing all the FFmpeg
audio/video encoders and decoders. Most codecs were developped from
scratch to ensure best performances and high code reusability.</li>

<li><tt>libavformat</tt> is a library containing parsers and
generators for all common audio/video formats.</li>

</ul>

<?php require ('navbar-footer.html'); ?>

<!--
<hr>
Fabrice Bellard - <a href="http://bellard.org/">
http://bellard.org/ </a> - <a href="http://ffmpeg.org/"> http://ffmpeg.org/ </a>
<hr>
-->
</body></html>
