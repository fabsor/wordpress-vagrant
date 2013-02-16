class { 'systools': }
class { 'apache': }
class { 'php':
  development => true
}
class { 'postfix': }

class { 'mysql':
  local_only     => true,
  hostname => "devbox.dev"
}

apache::vhost { "drupal": }
