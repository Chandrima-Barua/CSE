class CreateMbookings < ActiveRecord::Migration[5.0]
  def change
    create_table :mbookings do |t|
      t.string :name
      t.string :phone
      t.srting :email
      t.string :amount

      t.timestamps
    end
  end
end
