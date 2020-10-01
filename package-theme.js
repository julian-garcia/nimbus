const fs = require('fs');
const archiver = require('archiver');

const output = fs.createWriteStream(__dirname + '/nimbus.zip');
const archive = archiver('zip', {
  zlib: { level: 9 }
});

archive.pipe(output);
archive.glob('*.php');
archive.glob('*.png');
archive.glob('*.css');
archive.glob('style/main.min*');
archive.glob('js/main.min*');
archive.directory('fonts');
archive.directory('images');
archive.directory('vendor');
archive.finalize();