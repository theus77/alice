# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.11"
    config.vm.hostname = "alice"
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
    config.vm.synced_folder "/Users/theus/Pictures/Aperture Library.aplibrary", "/var/www/aperture", :mount_options => ["dmode=777", "fmode=666"]
    
    # Optional NFS. Make sure to remove other synced_folder line too
    #config.vm.synced_folder ".", "/var/www", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

	config.vm.provision :shell, 
		inline: "/bin/sh /var/www/bootstrap.sh", 
		keep_color: true,
		privileged: false
	
end
