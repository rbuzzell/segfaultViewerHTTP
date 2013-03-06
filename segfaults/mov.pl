#!/usr/bin/perl 
#===============================================================================
#
#         FILE:  mov.pl
#
#        USAGE:  ./mov.pl  
#
#  DESCRIPTION:  
#
#      OPTIONS:  ---
# REQUIREMENTS:  ---
#         BUGS:  ---
#        NOTES:  ---
#       AUTHOR:  YOUR NAME (), 
#      COMPANY:  
#      VERSION:  1.0
#      CREATED:  03/02/2013 06:53:16 PM
#     REVISION:  ---
#===============================================================================

use strict;
use warnings;

my $input;
my $output;
while($input = <>)
{
chomp $input;
$output = $input;


$output =~ s/^Volume\s([0-9]),/Volume 0$1,/;
$output =~ s/^Volume\s([0-9]+)\sI/Volume $1, I/;
$output =~ s/Issue\s([0-9])\.pdf$/Issue 0$1\.pdf/;
print $output;
system("mv", $input, $output)
}
print "DONE\n";
