<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>FFmpeg: Submitting a Bug Report</title>
</head>


<body bgcolor="#FFFFFF">

<?php require ('navbar.html'); ?>

<h3>Reporting a Bug To The FFmpeg Project</h3>

<p>

First off, please remember that all the developer working on FFmpeg are
volunteers, we are not paid for analyzing, debugging, fixing and answering
bug reports. While we try our best to create high quality software and be
responsive, if you should not get an answer, please consider the above and
be aware of the fact that we receive many bug reports and the amount of
time it takes to deal with them can be substantial. Nevertheless most issues
get resolved, just please understand that there are no guarantees nor
promises.

<p>
If you find a problem with FFmpeg, you can submit a report to the
<a href="http://mplayerhq.hu/mailman/listinfo/ffmpeg-devel">ffmpeg-devel mailing list</a>.
Before reporting a bug, please consider the following items:

<p>

Be sure that you are using the latest CVS version of FFmpeg. The FFmpeg
project is constantly evolving and does not make formal releases very
often. The latest release is likely to be very out of date. Use the very
latest CVS version of FFmpeg or your report is likely to be disregarded.

When writing your bug report, please include:
<ul>
  <li>What you were trying to accomplish (e.g., "I am trying to transcode
    from this format to that format...")
  <li>The problem you encountered (e.g., "FFmpeg crashed" or "The output
    video was all green")
  <li>The exact command line you were using (e.g., "ffmpeg -i input.mov -an
    -vcodec foo output.avi")
  <li>The console output provided by FFmpeg (copy/pasted from the console,
    including the banner that indicates version and build number)
</ul>

Further, if you have access to the GNU debugger (GDB), it would also be useful
for you to run FFmpeg's debug build (ffmpeg_g) through the debugger and send
the output. To do this, launch ffmpeg_g in gdb:

<pre>
  gdb ffmpeg_g
</pre>

In gdb, type 'r' for run, along with the rest of the FFmpeg command line:

<pre>
  > r &lt;rest of command line&gt;
</pre>

When gdb encounters its problem, run the following commands and copy/paste
the output into your bugreport email:

<pre>
  bt
  disass $pc-32 $pc+32
  info all-registers
</pre>


<h3>Submitting Sample Media</h3>

The developers may ask you to provide a sample media file illustrating
your problem. In this case, please follow these steps:
<ul>
  <li>If the sample file is too large ( > 10 megabytes), cut it down to
    size with the Unix 'dd' command:
      <blockquote>
      dd if=sample-file of=small-sample-file bs=1024 count=10000
      </blockquote>
    and then upload small-sample-file rather than sample-file
  <li>Upload the sample to the MPlayer FTP:
  <ul>
    <li>log into ftp.mplayerhq.hu with an anonymous FTP login
    <li>cd -> /MPlayer/incoming
    <li>create a new directory
    <li>cd -> your new directory
    <li>upload a brief text file describing the sample and what is wrong
    <li>upload the sample
  </ul>
  <li>Email the list and indicate the location of the sample; note that you
    will not be able to download files from /MPlayer/incoming, but the
    FFmpeg developers will have access
</ul>

<?php require ('navbar-footer.html'); ?>

</body>
</html>
