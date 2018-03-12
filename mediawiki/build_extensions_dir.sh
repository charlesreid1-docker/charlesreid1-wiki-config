#!/bin/bash

mkdir -p extensions
(
cd extensions

##############################

Extension="SyntaxHighlight_GeSHi"
if [ ! -d ${Extension} ]
then
    ## This requires mediawiki > 1.31
    #git clone https://github.com/wikimedia/mediawiki-extensions-SyntaxHighlight_GeSHi.git SyntaxHighlight_GeSHi

    wget https://extdist.wmflabs.org/dist/extensions/SyntaxHighlight_GeSHi-REL1_30-87392f1.tar.gz -O SyntaxHighlight_GeSHi.tar.gz
    tar -xzf SyntaxHighlight_GeSHi.tar.gz -C ${PWD}
    rm -f SyntaxHighlight_GeSHi.tar.gz
else
    echo "Skipping ${Extension}"
fi

##############################

Extension="ParserFunctions"
if [ ! -d ${Extension} ]
then
    git clone https://github.com/wikimedia/mediawiki-extensions-ParserFunctions.git ${Extension}
else
    echo "Skipping ${Extension}"
fi

##############################

Extension="EmbedVideo"
if [ ! -d ${Extension} ]
then
    git clone https://github.com/HydraWiki/mediawiki-embedvideo.git ${Extension}
else
    echo "Skipping ${Extension}"
fi

##############################

Extension="Math"
if [ ! -d ${Extension} ]
then
    git clone https://github.com/wikimedia/mediawiki-extensions-Math.git ${Extension}
else
    echo "Skipping ${Extension}"
fi
)

