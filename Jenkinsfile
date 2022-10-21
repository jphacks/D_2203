pipeline {
    agent any

    environment {
        JENKINS_NODE_COOKIE = 'dontKillMe'
    }

    stages {
        stage("checkout") {
            steps {
                checkout scm
            }
        }

        stage("frontend-build") {
            agent {
                docker {
                    image "node:16-alpine"
                    reuseNode true
                }
            }
            steps {
                dir("app/src/main/pointer") {
                    sh "yarn install"
                    sh "yarn build"
                }
            }
        }

        stage("backend-build") {
            agent {
                docker {
                    image "openjdk:11-jdk"
                    reuseNode true
                }
            }
            steps {
                sh "./gradlew bootJar"
            }
        }

        stage("deploy") {
            steps {
                sh "docker-compose up -d -build"
            }
        }
    }

    post {
        always {
            discordSend link: env.BUILD_URL,
                        result: currentBuild.currentResult,
                        title: JOB_NAME,
                        webhookURL: DISCORD_WEBHOOK_URL
        }
    }
}
