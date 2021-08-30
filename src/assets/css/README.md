# Running postcss

Run in VAGRANT. (postcss is installed there.)

```bash
cd /wp-content/themes/wp-theme__labs-londonparkour/src/assets/css/file_scans/files
rm -Rf *.html
cd ..
./fetch.sh
cd ..
NODE_ENV=production postcss ./tailwind.css --config postcss.config.js --output ./style.css
```