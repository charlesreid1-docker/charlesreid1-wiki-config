#!/bin/bash

mkdir -p extensions
(
cd extensions

if [ ! -d "SyntaxHighlight_GeSHi" ]
then
    git clone https://github.com/wikimedia/mediawiki-extensions-SyntaxHighlight_GeSHi.git SyntaxHighlight_GeSHi
fi

if [ ! -d "ParserFunctions" ]
then
    git clone https://github.com/wikimedia/mediawiki-extensions-ParserFunctions.git ParserFunctions

fi

if [ ! -d "EmbedVideo" ]
then
    git clone https://github.com/HydraWiki/mediawiki-embedvideo.git EmbedVideo
fi

if [ ! -d "Math" ]
then
    git clone https://github.com/wikimedia/mediawiki-extensions-Math.git Math
fi
)

