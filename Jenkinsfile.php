pipeline {
    agent {
        label 'windows'
    }

    stages {
        stage('Install Dependencies') {
            steps {
                bat 'npm install'
            }
        }
        
        stage('Unit Test') {
            steps {
                echo 'ejecutando Unit Test'
            }
        }

        stage('Build Application') {
            steps {
                bat 'ng build'
            }
        }
    }
}    