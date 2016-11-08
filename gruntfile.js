module.exports = function(grunt){

  // grunt config
  grunt.initConfig({
    // minificando o CSS
    cssmin:{
      target:{
        files:{
          // combina e minifica todos os arquivos css em um unico arquivo
          'assets/css/main.min.css' : ['css/*.css']
        }
      }
    },
    // otimizando imagens
    smushit: {
      group1: {
        src: 'images/',
      }
    }
  });

  // carrega os plugins
  // minificador de css
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  // otimizador de imagens
  grunt.loadNpmTasks('grunt-smushit');

  // registra as tasks
  grunt.registerTask('css',['cssmin']);
  grunt.registerTask('image',['smushit']);

}
