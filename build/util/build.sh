#!/bin/sh
rm -rf ../packaging && mkdir ../packaging
rm -rf ../packages && mkdir ../packages
cp -r ../../com_empty/* ../packaging
cd ../packaging
zip -r ../packages/com_empty.zip site/ empty.xml
