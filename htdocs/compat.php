<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
   <title>FFmpeg Compatibility</title>
</head>

<body bgcolor="#FFFFFF">

<H2>FFmpeg Compatibility</H2>

<?php require ('navbar.html'); ?>

<H3>Windows Compatibility</H3>

FFmpeg can generate a lot of different types of multimedia files with a
variety of audio and video codecs inside. Sometimes these formats do
not adhere to "accepted" specifications. Many open source multimedia
playback applications have been specifically tuned to play all manner
of multimedia files, no matter how incomplete or broken. However,
certain widespread, proprietary multimedia apps, such as Microsoft
Windows Media Player and Apple's QuickTime Player, are a little more
rigid in the types of files they will accept.

<P>
Some FFmpeg end-users wish to know which encoding modes will produce files
that can be played in common proprietary multimedia players. This page
is intended to help them out.

<P>
<H3>Testing Procedure</H3>
These tests were conducted on Friday, February 4, 2005 with the FFmpeg CVS copy
from that day. Also, the machine generating the files was an AMD64 
computer.

<P>
The Windows testing computer is a Pentium 4 PC with a fresh install of 
Windows XP with Service Pack 2 pre-applied. Windows Media Player is the
default, "out of the box" version installed with the platform. The Apple
QuickTime Player is v6.5.2, the latest as of this writing.

<P>
<H3>Windows Media Player</H3>
The following command lines produced AVI files that were playable with
the default WinXP/SP2 installation of Windows Media Player:

<UL>
<LI><EM>ffmpeg -i &lt;inputfile.ext&gt; -vcodec msmpeg4 -vtag MP43 -acodec mp3 &lt;file.avi&gt;</EM
<BR>
This is the same as the infamous 'DIV3' DivX ;-) codec. However, if the
'-vtag' option is omitted, the 'DIV3' tag will be inserted by default and
WMP will reject the video format.</LI>

<LI><EM>ffmpeg -i &lt;inputfile.ext&gt; -vcodec msmpeg4v2 -acodec mp3 &lt;file.avi&gt;</EM>
<BR>
use Microsoft MPEG-4v2 video</LI>

<LI><EM>ffmpeg -i &lt;inputfile.ext&gt; -vcodec wmv7 -acodec mp3 &lt;file.avi&gt;</EM>
<BR>
use Microsoft WMV7</LI>
</UL>

Note that if you omit a specific '-acodec' audio coding format, FFmpeg
will encode MP2 audio by default. This also works with the default WMP.

<P>
Note also that MP3 encoding support is external to FFmpeg and must be
configured appropriately.

<P>
Another compatible format that WMP can handle is vanilla MPEG. The command
line:

<BLOCKQUOTE>
<EM>ffmpeg -i &lt;inputfile.ext&gt; &lt;file.mpg&gt;</EM>
</BLOCKQUOTE>

will create a MPEG file with MPEG-1 video and MP2 audio.


<P>
<H3>Apple QuickTime Player</H3>
The following command lines produced QuickTime files that were playable
with Apple QuickTime Player v6.5.2:

<UL>
<LI><EM>ffmpeg -i &lt;inputfile.ext&gt; &lt;file.mov&gt;</EM></LI>
<LI><EM>ffmpeg -i &lt;inputfile.ext&gt; &lt;file.mp4&gt;</EM></LI>
</UL>

These command lines will produce MPEG-4 QuickTime files with ISO MPEG-4
video and AAC audio. Note that AAC encoding support is external to FFmpeg
and must be configured appropriately.

<P>
Another compatible format that Apple's QuickTime Player can handle is 
vanilla MPEG. The command line:

<BLOCKQUOTE>
<EM>ffmpeg -i &lt;inputfile.ext&gt; &lt;file.mpg&gt;</EM>
</BLOCKQUOTE>

will create a MPEG file with MPEG-1 video and MP2 audio.

<P>

<?php require ('navbar-footer.html'); ?>

</body>
</html>
